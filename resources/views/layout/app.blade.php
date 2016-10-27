<!doctype html>
<html lang="en">
<head>
    {{--Common Meta Tags--}}
    {{--=======================================--}}
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Project M</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {{--<meta NAME="DESCRIPTION" CONTENT="{{$meta['meta_desc']}}">--}}
    {{--<meta NAME="AUTHOR" CONTENT="Doung Kimrongden">--}}
    {{--<meta NAME="COPYRIGHT" CONTENT="{{$meta['meta_copy_right']}}">--}}

    {{--Google Meta Tags--}}
    {{--=======================================--}}
    {{--<link rel="publisher" href="{{$meta['google_publisher']}}">--}}
    {{--<meta NAME="robots" content="{{$meta['google_robots']}}">--}}
    {{--Tweeter Meta Tags--}}
    {{--=======================================--}}
    {{--@if($meta['tw_card']!= "")--}}

        {{--<meta name="twitter:card" content="{{$meta['tw_card']}}">--}}
        {{--<meta name="twitter:site" content="{{$meta['tw_site']}}">--}}
        {{--<meta name="twitter:title" content="{{$meta['tw_title']}}">--}}
        {{--<meta name="twitter:description" content="{{$meta['tw_desc']}}">--}}
        {{--<meta name="twitter:image" content="{{$meta['tw_img']}}">--}}
        {{--<meta name="twitter:image:alt" content="{{$meta['tw_img_alt']}}">--}}
    {{--@endif--}}
    {{--Facebook Meta Tags--}}
    {{--=======================================--}}
    {{--@if($meta['fb_type']!="")--}}
        {{--Common Facebook Meta Tags--}}
        {{--<meta property="og:type" content="{{$meta['fb_type']}}">--}}
        {{--<meta property="fb:app_id" content="{{$meta['fb_app_id']}}">--}}
        {{--<meta property="og:title" content="{{$meta['fb_title']}}">--}}
        {{--<meta property="og:description" content=" {{$meta['fb_desc']}}">--}}
        {{--<meta property="og:url" content="{{$meta['fb_url']}}">--}}
        {{--<meta property="og:image" content="{{$meta['fb_img']}}">--}}
    {{--@elseif($meta['fb_type']=="business.business")--}}

        {{--Business Facebook Meta Tags--}}
        {{--<meta property="business:contact_data:street_address" content="{{$meta['fb_street_address']}}">--}}
        {{--<meta property="business:contact_data:locality" content="{{$meta['fb_locality']}}">--}}
        {{--<meta property="business:contact_data:region" content="{{$meta['fb_region']}}">--}}
        {{--<meta property="business:contact_data:postal_code" content="{{$meta['fb_postal_code']}}">--}}
        {{--<meta property="business:contact_data:country_name" content="{{$meta['fb_country_name']}}">--}}
        {{--<meta property="business:contact_data:email" content="{{$meta['fb_business_email']}}">--}}
        {{--<meta property="business:contact_data:phone_number" content="{{$meta['fb_bisiness_phone_number']}}">--}}
        {{--<meta property="business:contact_data:website" content="{{$meta['fb_business_website']}}">--}}
        {{--<meta property="place:location:latitude" content="{{$meta['fb_location_latitude']}}">--}}
        {{--<meta property="place:location:longitude" content="{{$meta['fb_location_longitude']}}">--}}

    {{--@elseif($meta['fb_type']=="place")--}}

        {{--Place Facebook Meta Tags--}}
        {{--<meta property="place:location:latitude" content="{{$meta['fb_location_latitude']}}">--}}
        {{--<meta property="place:location:longitude" content="{{$meta['fb_location_longitude']}}">--}}

    {{--@elseif($meta['fb_type']=="product")--}}

        {{--Product Facebook Meta Tags--}}
        {{--<meta property="product:price:amount" content="{{$meta['fb_product_price_amount']}}">--}}
        {{--<meta property="product:price:currency" content="{{$meta['fb_product_price_currency']}}">--}}
        {{--<meta property="product:pretax_price:amount" content="{{$meta['fb_product_tax_amount']}}">--}}
        {{--<meta property="product:pretax_price:currency" content="{{$meta['fb_product_tax_currency']}}">--}}
        {{--<meta property="product:shipping_cost:amount" content="{{$meta['fb_product_shipping_amount']}}">--}}
        {{--<meta property="product:shipping_cost:currency" content="{{$meta['fb_product_shipping_currency']}}">--}}

    {{--@elseif($meta['fb_type']=="profile")--}}

        {{--Profile Facebook Meta Tags--}}
        {{--<meta property="profile:first_name" content="{{$meta['fb_profile_firstname']}}">--}}
        {{--<meta property="profile:last_name" content="{{$meta['fb_profile_lastname']}}">--}}
        {{--<meta property="profile:gender" content="{{$meta['fb_profile_gender']}}">--}}
        {{--<meta property="profile:username" content="{{$meta['fb_profile_username']}}">--}}
{{--@endif--}}

{{--Data Structured Section--}}
{{--=======================================--}}
{{--@yield('data_structured')--}}
{{--<!-- Latest compiled and magnified CSS -->--}}
    {{--<link rel="stylesheet" href={{URL::asset('/assets/css/final.css')}} />--}}
    {{--<link rel="icon" type="image/x-icon" href="{{URL::asset('/assets/img/favicon.png')}}" />--}}
    {{--<script>--}}
        {{--(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){--}}
                    {{--(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),--}}
                {{--m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)--}}
        {{--})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');--}}
        {{--ga('create', 'UA-42546524-3', 'auto');--}}
        {{--ga('send', 'pageview');--}}
    {{--</script>--}}

    <link rel="stylesheet" href="{{elixir('assets/css/app.min.css')}}">

    <link rel="icon" href="{{url('assets/img/logo.png')}}">

</head>
<body><!-- /.modal -->
@section('header')
@show
<div>
    @yield('banner')
</div>
<!--content section -->
@yield('content')
<script src="{{elixir('assets/js/app.min.js')}}"></script>
</body>

</html>