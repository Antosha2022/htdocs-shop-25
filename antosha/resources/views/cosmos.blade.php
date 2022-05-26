@extends ('loyauts.app')

@section('title-block')каталог@endsection

@section('content')<h1>каталог</h1>
Тут реалізоване відображення деяких косметичних засобів за допомогою власних стилів CSS.<br>
При на веденні на зображення відбувається його плавне (тривалістю 500ms) збільшення на 5%.
<div class="row">

    <div class=mediaFiles>
    <img width=100% height=100% src="/mediaFiles/gigi_1.jpg">
    </div>

    <div class="mediaFiles">
    <img  width=100% height=100% src="/mediaFiles/klapp_1.jpg">
    </div>

    <div class="mediaFiles">
    <img width=100% height=100% src="/mediaFiles/klapp_2.jpg">
    </div>

    <div class="mediaFiles">
    <img width=100% height=100% src="/mediaFiles/smart4derma_1.jpg">
    </div>

    <div class="mediaFiles">
    <img width=100% height=100% src="/mediaFiles/smart4derma_2.jpg">
    </div>

</div>



@endsection

@section('aside')
 @parent
 <p>По діброві вітер виє,<br>Гуляє по полю,<br>Край дороги гне тополю<br>До самого долу.</p>
@endsection
