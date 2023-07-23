@component('mail::message')
# Join Us Form




@component('mail::table')
    | Record      | Data         |
    | :--------- | :------------- |
    |  Full Name          | {{$full_name}} |
    |  Email | {{$email}} |
    | company name | {{$company_name}} |
    | email | {{$email}} |
    | phone | {{$phone}} |
    | online store platform | {{$online_store_platform}} |
    | online store url | {{$online_store_url}} |
    | count orders | {{$count_orders}} |
    | count orders ads | {{$count_orders_ads}} |
    | message | {{$message}} |

@endcomponent
Thanks,<br>
{{ 'Isnaad App' }}
@endcomponent
