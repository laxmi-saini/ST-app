@extends('layouts.admin')
@section('title', 'Questions')
@section('content')
	<div class="row">
    <section class="content">
		  <div class="col-md-8 col-md-offset-2">
				<div class="panel panel-default">
					<div class="panel-body">
					<div class="pull-left"><h3>List Questions</h3></div>

					<div class="pull-right">
					  <div class="btn-group">
						  <a href="{{ route('question.create') }}" class="btn btn-info" >Add New</a>
						</div>
					</div>

					<div class="table-container">
            <table id="mytable" class="table table-bordred table-striped">                   
              <thead>                   
                <th><input type="checkbox" id="checkall" /></th>
                <th>Question</th>
                <th>Correct Answer</th>
                <th>Option 2</th>
                <th>Option 3</th>
                <th>Option 4</th>
                <th>View</th>
                <th>Edit</th>
                <th>Delete</th>
              </thead>

              <tbody>
              @if($questions->count())  
                @foreach($questions as $question)  
                  <tr>
                    <td><input type="checkbox" class="checkthis" /></td>
                    <td>{{$question->question}}</td>
                    <td>{{$question->correct_answer}}</td>
                    <td>{{$question->wrong_option1}}</td>
                    <td>{{$question->wrong_option2}}</td>
                    <td>{{$question->wrong_option3}}</td>
                    <td>
                      <span class="label label-{{ ($question->status) ? 'success' : 'danger' }}"> 
                      {{ ($question->status) ? ' Active ' : 'Inactive' }}
                      </span>
                    </td>
                    <td>
                      <a class="btn btn-primary btn-xs" href="{{action('QuestionController@show', $question->id)}}" >
                        <span class="glyphicon glyphicon-eye-open"></span>
                      </a>
                    </td>
                    <td>
                      <a class="btn btn-primary btn-xs" href="{{action('QuestionController@edit', $question->id)}}" >
                        <span class="glyphicon glyphicon-pencil"></span>
                      </a>
                    </td>
                    <td>
                      <form action="{{action('QuestionController@destroy', $question->id)}}" method="post">
                        {{csrf_field()}}
                        <input name="_method" type="hidden" value="DELETE">
   
                        <button class="btn btn-danger btn-xs" type="submit">
                          <span class="glyphicon glyphicon-trash"></span>
                        </button>
                    </td>
                  </tr>
                @endforeach 
              @else
                <tr>
                  <td colspan="7">No Records found !!</td>
                </tr>
              @endif
              </tbody>
            </table>
          </div>
				</div>
			</div>
		</div>
	</section>
@endsection