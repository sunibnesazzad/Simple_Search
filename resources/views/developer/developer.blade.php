<tr>
    <td><strong>{!! $developer->id !!}</strong></td>
    <td><strong>{!! $developer->email !!}</strong></td>
    <td>
        @foreach($developer->programming_language as $programming_language)
          <strong>{{$programming_language->name}}, </strong>
        @endforeach
    </td>
    <td>
        @foreach($developer->language as $language)
            <strong>{{$language->code}}, </strong>
        @endforeach
    </td>
</tr>