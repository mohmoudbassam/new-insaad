
<tr>
    <td class="pe-1">{{__('dashboard.application.mother_name')}}:</td>
    <td>{{$application->mother_name}}</td>
</tr>
<tr>
    <td class="pe-1">{{__('application.dad_name')}}:</td>
    <td>{{$application->dad_name}}</td>
</tr>
<tr>
    <td class="pe-1">{{__('dashboard.application.whatsapp')}}:</td>
    <td class="application_phone">{{$application->whats_number}} </td>
</tr>

<tr>
    <td class="pe-1">{{__('dashboard.application.birthday')}}:</td>
    <td>{{$application->birthday}} </td>
</tr>

<tr>
    <td class="pe-1">{{__('application.Passport ID')}}:</td>
    <td>{{$application->passport_number}} </td>
</tr >

<tr>
    <td class="pe-1">{{__('application.Country of residence')}}:</td>
    <td>{{$application->country->name}} </td>
</tr>
<tr>
    <td class="pe-1">{{__('dashboard.University.City')}}:</td>
    <td>{{$application->city->name}} </td>
</tr>

<tr>
    <td class="pe-1">{{__('application.gender')}}:</td>
    <td>{{trans("dashboard.application.$application->gender")}} </td>
</tr>


<tr>
    <td class="pe-1">{{__('application.semester')}}:</td>
    <td>{{trans('application.'.$application->semester)}} </td>
</tr>
<tr>
    <td class="pe-1">{{__('universities.scientific degree')}}:</td>
    <td>{{trans('application.'.$application->scientificDegree)}} </td>
</tr>

<tr>
    <td class="pe-1">{{__('dashboard.main.study-languages')}}:</td>
    <td>{{$application->study_language->name}} </td>
</tr>
<tr>
    <td class="pe-1">{{__('application.first desire')}}:</td>
    <td>{{$application->firstDesire->name}} </td>
</tr>
<tr>
    <td class="pe-1">{{__('application.second desire')}}:</td>
    <td>{{$application->secondDesire->name}} </td>
</tr>

<tr>
    <td class="pe-1">{{__('dashboard.application.university Name')}}:</td>
    <td>{{$application->university->title ?? ''}} </td>
</tr>

<tr>
    @if(!empty($application->image))
        <td class="pe-1">{{__('dashboard.application.image')}}:</td>
        <td>
            <a href="{{URL::to($application->image)}}" target="_blank" download>
                <button class="btn btn-success"><i data-feather='download'></i> {{__('dashboard.main.download')}}
                </button>
            </a>
        </td>
    @endif
    @if(!empty($application->passport_photo))
        <td class="pe-1">{{__('dashboard.application.passport_photo')}}:</td>
        <td>
            <a href="{{URL::to($application->passport_photo)}}" target="_blank" download>
                <button class="btn btn-success"><i data-feather='download'></i> {{__('dashboard.main.download')}}
                </button>
            </a>
        </td>
    @endif

</tr>
<tr>
    @if(!empty($application->secondary_education_certificate))

        <td class="pe-1">{{__('dashboard.application.secondary_education_certificate')}}:</td>
        <td>
            <a href="{{URL::to($application->secondary_education_certificate)}}"
               target="_blank" download>
                <button class="btn btn-success"><i data-feather='download'></i> {{__('dashboard.main.download')}}
                </button>
            </a>
        </td>
    @endif
    @if(!empty($application->secondary_education_degree))

        <td class="pe-1">{{__('dashboard.application.secondary_education_degree')}}:</td>
        <td>
            <a href="{{URL::to($application->secondary_education_degree)}}"
               target="_blank" download>
                <button class="btn btn-success"><i data-feather='download'></i> {{__('dashboard.main.download')}}
                </button>
            </a>
        </td>
    @endif

</tr>
<tr>
    @if(!empty($application->Bachelor_degree_photo))

        <td class="pe-1">{{__('dashboard.application.Bachelor_degree_photo')}}:</td>
        <td>
            <a href="{{URL::to($application->Bachelor_degree_photo)}}" target="_blank" download>
                <button class="btn btn-success"><i data-feather='download'></i> {{__('dashboard.main.download')}}
                </button>
            </a>
        </td>
    @endif
    @if(!empty($application->Bachelor_degree_transcript))

        <td class="pe-1">{{__('dashboard.application.Bachelor_degree_transcript')}}:</td>
        <td>
            <a href="{{URL::to($application->Bachelor_degree_transcript)}}"
               target="_blank" download>
                <button class="btn btn-success"><i data-feather='download'></i> {{__('dashboard.main.download')}}
                </button>
            </a>
        </td>
    @endif

</tr>
<tr>
    @if(!empty($application->letter_of_intent))

        <td class="pe-1">{{__('dashboard.application.letter_of_intent')}}:</td>
        <td>
            <a href="{{URL::to($application->letter_of_intent)}}" target="_blank" download>
                <button class="btn btn-success"><i data-feather='download'></i> {{__('dashboard.main.download')}}
                </button>
            </a>
        </td>
    @endif
    @if(!empty($application->Master_degree_certificate))

        <td class="pe-1">{{__('dashboard.application.Master_degree_certificate')}}:</td>
        <td>
            <a href="{{URL::to($application->Master_degree_certificate)}}"
               target="_blank" download>
                <button class="btn btn-success"><i data-feather='download'></i> {{__('dashboard.main.download')}}
                </button>
            </a>
        </td>
    @endif

</tr>
<tr>
    @if(!empty($application->Master_degree_transcript))
        <td class="pe-1">{{__('dashboard.application.Master_degree_transcript')}}:</td>
        <td>
            <a href="{{URL::to($application->Master_degree_transcript)}}"
               target="_blank" download>
                <button class="btn btn-success"><i data-feather='download'></i> {{__('dashboard.main.download')}}
                </button>
            </a>
        </td>
    @endif

    @if(!empty($application->letter_of_recommendation))
        <td class="pe-1">{{__('application.letter_of_recommendation')}}:</td>
        <td>
            <a href="{{URL::to($application->letter_of_recommendation)}}"
               target="_blank" download>
                <button class="btn btn-success"><i data-feather='download'></i> {{__('dashboard.main.download')}}
                </button>
            </a>
        </td>
    @endif
    @if(!empty($application->letter_of_recommendation2))
        <td class="pe-1">{{__('application.letter_of_recommendation2')}}:</td>
        <td>
            <a href="{{URL::to($application->letter_of_recommendation2)}}"
               target="_blank" download>
                <button class="btn btn-success"><i data-feather='download'></i> {{__('dashboard.main.download')}}
                </button>
            </a>
        </td>
    @endif

</tr>
<tr>
    @if(!empty($application->toefl_test_certificate))

        <td class="pe-1">{{__('dashboard.application.toefl_test_certificate')}}:</td>
        <td>
            <a href="{{URL::to($application->toefl_test_certificate)}}" target="_blank" download>
                <button class="btn btn-success"><i data-feather='download'></i> {{__('dashboard.main.download')}}
                </button>
            </a>
        </td>
    @endif

</tr>
