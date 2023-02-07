<table>

<tr>
<th>Cake</th>
<th>price</th>
<th>flavor</th>
</tr>


@foreach($keyy as $x)
<tr>
<td>{{ $x->cake_name}}</td>
<td>{{ $x->price}}</td>
<td>{{ $x->flavor}}</td>
</tr>
@endforeach
<table>