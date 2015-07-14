<!--
/**
 * Created by PhpStorm.
 * User: root
 * Date: 14/07/15
 * Time: 16:42
 */
 -->
<ul>
@foreach($tests as $frutas)
    @foreach($frutas as $key => $fruta)
        <li>{{$key}} -
        {{$fruta}}</li>
@endforeach
    @endforeach
</ul>