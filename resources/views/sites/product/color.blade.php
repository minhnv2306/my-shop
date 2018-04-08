<select id="color" class="" name="attribute_color"
        data-attribute_name="attribute_color"
        data-show_option_none="yes" style="min-width: 200px">
    @foreach($colors as $color)
        <option value="{{$color->color_name}}">{{$color->color_name}}</option>
    @endforeach
</select></td>