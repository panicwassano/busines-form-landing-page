@extends('layouts.default')

@section('content')
    <div class="main_container container">
        <div class="header">
            <h1 class="logo"><a target="_blank" href="http://hiphone.ru">hiphone.ru</a></h1>
            <div class="phones"><img src="/assets/customer/images/phones.jpg" alt=""/></div>
            <div class="cf"></div>
        </div>
        <div class="content">
            <div class="content_title">
                <span class="content_title_big">Бизнес сувениры и корпоративные подарки</span><br/>
                Подберём несколько вариантов подарков под ваш бюджет
            </div>
            <div class="content_main">
                <div class="content_main_image">
                    <img src="/assets/customer/images/bear.jpg" alt=""/>
                </div>
                @include('partials.forms.ideas')
                <div class="cf"></div>
            </div>
        </div>
    </div><!-- end container -->
@stop