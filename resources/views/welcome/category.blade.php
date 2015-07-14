<!--
/**
 * Created by PhpStorm.
 * User: root
 * Date: 14/07/15
 * Time: 19:52
 */
 -->
<ul>
@foreach($categories as $category)
    <li>
    <a href="{{route('welcome.category_list')}}"> {{$category->cat_name}}</a>
    </li>

@endforeach
</ul>