<div class="content_main_form">
    <div class="content_main_form_title">
        Наши идеи бесплатны!
    </div>
    <div class="content_main_form_info">
        Оставьте заявку, и наши менеджеры придумают <strong>3 варианта</strong> Вашего подарка <strong class="red">абсолютно бесплатно!</strong>
    </div>
    
    {{ Form::open(array('url' => '/')) }}
        <ul class="header_form_menu">
            <li>
                {{ Form::text('name', '', ['class' => 'header_form_input header_form_input_name', 'placeholder' => 'ВАШЕ ИМЯ']) }}
            </li>
            <li>
                {{ Form::text('email', '', ['class' => 'header_form_input header_form_input_email', 'placeholder' => 'ВАШ E-MAIL']) }}
            </li>
            <li>
                {{ Form::text('phone', '', ['class' => 'header_form_input header_form_input_phone', 'placeholder' => 'ВАШ-ТЕЛЕФОН']) }}
            </li>
            <li class="submit">
                {{ Form::submit('', ['class' => 'header_form_submit']) }}
            </li>
        </ul>
        <div class="content_main_form_message">
            <img src="/assets/customer/images/block.jpg" alt=""/>
            <p>Ваши контактные данные в безопасности<br>
                и не будут переданы третьим лицам</p>
        </div>
    {{ Form::close() }}
    <div class="content_main_form_success">
        <p>
            Спасибо! Ваша заявка успешна отправлена, мы свяжемся с вами в ближайшее время.
        </p>
    </div>
</div>