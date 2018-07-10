<div class="form-group">
  {!! Form::label('title', 'Title:') !!}
  {!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
  {!! Form::label('body', 'Body:') !!}
  {!! Form::textarea('body', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
  {!! Form::label('published_at', 'Publish on:') !!}
  {!! Form::input('date', 'published_at', Carbon\Carbon::now()->format('Y-m-d'), ['class' => 'form-control']) !!}
</div>

<div class="form-group">
  {!! Form::label('tags', 'Tags:') !!}
  {!! Form::select('tags[]', $tags, null, ['class' => 'form-control', 'id' => 'tags', 'multiple']) !!}
</div>

<div class="form-group">
  {!! Form::submit($submitButtonText, ['class' => 'btn btn-primary form-control']) !!}
</div>

@section('footer')

  <script type="text/javascript">
    $('#tags').select2({
      placeholder: 'Choose a tag',
      // tags: true,
      // ajax: {
      //   datatype: 'json',
      //   url: 'api/tags',
      //   delay: 250,
      //   data: function(params) {
      //     return {
      //       q: params.term
      //     }
      //   },
      //   proccessResults: function(data) {
      //     return { results: data };
      //   },
      // },
    });
  </script>

@stop
