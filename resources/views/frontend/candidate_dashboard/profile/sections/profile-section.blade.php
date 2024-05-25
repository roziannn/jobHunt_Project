 <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
     <form action="{{ route('candidate.profile.profile-info.update') }}" method="POST">
         @csrf
         <div class="row">
             <div class="col-md-12">
                 <div class="row">
                     <div class="col-6">
                         <div class="form-group select-style">
                             <label class="font-sm color-text-mutted mb-10">Gender *</label>
                             <select name="gender"
                                 class="form-control {{ $errors->has('gender') ? 'is-invalid' : '' }}
                            form-icons select-active">
                                 <option value="">Select One</option>
                                 <option @selected($candidate?->gender === 'male') value="male">Male</option>
                                 <option @selected($candidate?->gender === 'female') value="female">Female</option>
                             </select>
                             <x-input-error :messages="$errors->get('gender')" class="mt-2" />
                         </div>
                     </div>
                     <div class="col-6">
                         <div class="form-group select-style">
                             <label class="font-sm color-text-mutted mb-10">Marital Status *</label>
                             <select name="marital_status"
                                 class="form-control {{ $errors->has('marital_status') ? 'is-invalid' : '' }}
                          form-icons select-active">
                                 <option value="">Select One</option>
                                 <option @selected($candidate?->marital_status === 'single') value="single">Single</option>
                                 <option @selected($candidate?->marital_status === 'married') value="married">Married</option>
                             </select>
                             <x-input-error :messages="$errors->get('marital_status')" class="mt-2" />
                         </div>
                     </div>

                     <div class="col-6">
                         <div class="form-group select-style">
                             <label class="font-sm color-text-mutted mb-10">Profession *</label>
                             <select name="profession"
                                 class="form-control {{ $errors->has('profession') ? 'is-invalid' : '' }}
                               form-icons select-active">
                                 <option value="">Select One</option>
                                 @foreach ($professions as $item)
                                     <option @selected($item->id === $candidate?->profession_id) value="{{ $item->id }}">
                                         {{ $item->name }}</option>
                                 @endforeach
                             </select>
                             <x-input-error :messages="$errors->get('profession')" class="mt-2" />
                         </div>
                     </div>

                     <div class="col-6">
                         <div class="form-group select-style">
                             <label class="font-sm color-text-mutted mb-10">Your Availability *</label>
                             <select name="availability"
                                 class="form-control {{ $errors->has('availability') ? 'is-invalid' : '' }}
                              form-icons select-active">
                                 <option value="">Select One</option>
                                 <option @selected($candidate?->status === 'available') value="available">Available</option>
                                 <option @selected($candidate?->status === 'not_available') value="not_available">Not Available</option>
                             </select>
                             <x-input-error :messages="$errors->get('availability')" class="mt-2" />
                         </div>
                     </div>

                     <div class="col-12">
                         <div class="form-group select-style">
                             <label class="font-sm color-text-mutted mb-10">Skills You Have *</label>
                             <select name="skill_you_have[]"
                                 class="form-control {{ $errors->has('skill_you_have') ? 'is-invalid' : '' }}
                             form-icons select-active"
                                 multiple="">
                                 <option value="">Select One</option>
                                 @php
                                     $candidateSkills = $candidate->skills->pluck('skill_id')->toArray();
                                 @endphp
                                 @foreach ($skills as $item)
                                     <option @selected(in_array($item->id, $candidateSkills)) value="{{ $item->id }}">
                                         {{ $item->name }}</option>
                                 @endforeach
                             </select>
                             <x-input-error :messages="$errors->get('skill_you_have')" class="mt-2" />
                         </div>
                     </div>

                     <div class="col-12">
                         <div class="form-group select-style">
                             <label class="font-sm color-text-mutted mb-10">Languages You Know *</label>
                             <select name="language_you_know[]"
                                 class="form-control {{ $errors->has('language_you_know') ? 'is-invalid' : '' }}
                            form-icons select-active"
                                 multiple="">
                                 <option value="">Select One</option>
                                 @php
                                     $candidateLangs = $candidate->languages->pluck('language_id')->toArray();
                                 @endphp
                                 @foreach ($languages as $item)
                                     <option @selected(in_array($item->id, $candidateLangs)) value="{{ $item->id }}">
                                         {{ $item->name }}</option>
                                 @endforeach
                             </select>
                             <x-input-error :messages="$errors->get('language_you_know')" class="mt-2" />
                         </div>
                     </div>

                     <div class="col-12">
                         <div class="form-group">
                             <label class="font-sm color-text-mutted mb-10">Biography *</label>
                             <textarea name="biography" class="{{ hasError($errors, 'biography') }}" id="editor">
                            {!! $candidate?->bio !!}</textarea>
                             <x-input-error :messages="$errors->get('biography')" class="mt-2" />
                         </div>
                     </div>
                 </div>
             </div>
         </div>
         <div class="box-button mt-15">
             <button class="btn btn-apply-big font-md font-bold">Save All Changes</button>
         </div>
     </form>
 </div>
