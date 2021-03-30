@extends('layouts.master') 
@section('title', 'Login Page')

@section('content')
<div>
    <table id="userTable" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th>Resource Name</th>
                    <th>Description</th>
                </tr>
            </thead>
            
            <tbody>
            @foreach($resources as $key => $resource)
				<tr>
            		<td>
            			<h3>{{ $resource['NAME'] }}</h3>
            		</td>
            		
            		<td>{{ $resource['DESCRIPTION'] }}</td>
            	</tr>
            @endforeach
        	</tbody>
    </table>
</div>
@endsection