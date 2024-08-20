<?php

namespace App\Services;

class Notify
{
    //Created Notification
    static function createdNotification()
    {
        return notyf()->addSuccess('Created Successfully⚡️', 'Success!');
    }

    //Updated Notification
    static function updatedNotification()
    {
        return notyf()->addSuccess('Updated Successfully⚡️', 'Success!');
    }

    //Deleted Notification
    static function deletedNotification()
    {
        return notyf()->addSuccess('Deleted Successfully⚡️', 'Success!');
    }

    //Error Notification
    static function errorNotification(string $error)
    {
        return notyf()->addError($error, 'Error!');
    }
}
