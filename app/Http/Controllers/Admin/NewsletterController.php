<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Mail\NewsletterMail;
use App\Models\Subscribers;
use App\Services\Notify;
use App\Traits\Searchable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\View\View;

class NewsletterController extends Controller
{
    use Searchable;

    function index(): View
    {
        $query = Subscribers::query();

        $this->seacrh($query, ['email']);
        $subscribers = $query->orderBy('id', 'DESC')->paginate(20);

        return view('admin.newsletter.index', compact('subscribers'));
    }

    function sendMail(Request $request)
    {
        $request->validate([
            'subject' => ['required', 'max:255'],
            'message' => ['required']
        ]);

        $subscribers = Subscribers::all();

        foreach ($subscribers as $key => $subscriber) {
            Mail::to($subscriber->email)->send(new NewsletterMail($request->subject, $request->message));
        }

        Notify::successNotification('Newsletter sent successfully!');

        return redirect()->back();
    }

    function destroy($id)
    {
        try {
            Subscribers::findOrFail($id)->delete();
            Notify::deletedNotification();
            return response(['message' => 'success'], 200);
        } catch (\Exception $e) {
            logger($e);
            return response(['message' => 'Something Went Wrong. Please Try Again!'], 500);
        }
    }
}
