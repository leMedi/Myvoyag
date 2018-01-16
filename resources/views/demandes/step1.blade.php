@extends('layouts.master')

@section('body')
<div class="container pt-5 push-bottom">
    @component('components.card')
        <nav class="nav nav-pills nav-fill">
            <a class="nav-item nav-link active" href="#">Active</a>
            <a class="nav-item nav-link disabled" href="#">Link</a>
            <a class="nav-item nav-link disabled" href="#">Link</a>
            <a class="nav-item nav-link disabled" href="#">Disabled</a>
        </nav>
    @endcomponent
    
    @component('components.card')
    <form class="mb-5" method="POST">
        {{ csrf_field() }}
        <h2 class="font-weight-bold mb-4">Demande de Voyage</h2>
        
        <div class="form-group">
            <label class="col-form-label-md">Objet de Voyage</label>
            @if ($errors->has('subjet'))
            <textarea name="subjet" class="form-control form-control-md is-invalid">{{ old('subjet') }}</textarea>
            <div class="invalid-feedback">{{ $errors->first('subjet') }}</div>
            @else
            <textarea name="subjet" class="form-control form-control-md">{{ $demande->subjet }}</textarea>
            @endif
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label class="col-form-label-md">Date Aller</label>
                @if ($errors->has('departure_date'))
                <input value="{{ old('departure_date') }}" name="departure_date" id="departure-date" value="{{ date('Y-m-d') }}" type="date" class="form-control form-control-md is-invalid">
                <div class="invalid-feedback">{{ $errors->first('departure_date') }}</div>
                @else
                <input name="departure_date" id="departure-date" value="{{ date('Y-m-d') }}" type="date" class="form-control form-control-md">
                @endif
            </div>
            <div class="form-group col-md-6">
                <label class="col-form-label-md">Date Retour</label>
                @if ($errors->has('return_date'))
                <input value="{{ old('return_date') }}" name="return_date" id="return-date" value="{{ date('Y-m-d') }}" type="date" class="form-control form-control-md is-invalid">
                <div class="invalid-feedback">{{ $errors->first('return_date') }}</div>
                @else
                <input name="return_date" id="return-date" value="{{ date('Y-m-d') }}" type="date" class="form-control form-control-md">
                @endif
            </div>
        </div>
        <button class="btn btn-primary float-right">Suivant</button>
    </form>
        
        <h5 class="font-weight-bold mt-3 mb-3">L'Agenda de Visite</h5>
        <div class="px-3">
            <table class="table table-bordered ">
                <thead>
                    <tr>
                        <th scope="col">Date</th>
                        <th scope="col">Debut</th>
                        <th scope="col">Fin</th>
                        <th scope="col">Objet</th>
                        <th scope="col" class="text-center">#</th>
                    </tr>
                </thead>
                <tbody id="tasks-list">
                    @foreach ($demande->tasks as $task)
                    <tr id="task{{$task->id}}">
                        <th scope="row">{{$task->date}}</th>
                        <td>{{$task->start}}</td>
                        <td>{{$task->end}}</td>
                        <td>{{$task->name}}</td>
                        <td class="text-center"><button class="del-task-btn btn btn-danger" data-id="{{$task->id}}">Supprimer</button></td>
                    </tr>
                    @endforeach
                    <form id="task-form" action="">
                        <tr id="form-row">
                            <th scope="row"><input id="task-date" value="{{ date('Y-m-d') }}" name="date" type="date" class="form-control form-control-md"></th>
                            <th><input name="start" type="time" class="form-control form-control-md"></th>
                            <td><input name="end" type="time" class="form-control form-control-md"></td>
                            <td><input name="name" type="text" class="form-control form-control-md"></td>
                            <td class="text-center px-0"><button type="submit" class="btn btn-primary">Ajouter</button></td>
                        </tr>
                    </form>
                </tbody>
                </table>
        </div>
    @endcomponent
</div>
@endsection

@section('scripts')
    <script>
        // First, checks if it isn't implemented yet.
        if (!String.prototype.format) {
            String.prototype.format = function() {
                var args = arguments;
                return this.replace(/{(\d+)}/g, function(match, number) { 
                return typeof args[number] != 'undefined'
                    ? args[number]
                    : match
                ;
                });
            };
        }

        var $formRow    = $('#form-row'),
            $taskFrom   = $('#task-form'),
            $tasksList  = $('#tasks-list');

        var $departureDate = $('#departure-date'),
            $taskDate = $('#task-date');

        $departureDate.on('change', function() {
            $taskDate.val($departureDate.val());
        })

        $taskFrom.on("submit", function(e) {
            e.preventDefault();
            // e.stopPropagate();

            $.ajax({
                type: 'POST',
                url: '{{ url("/demande/task/") }}/{{ $demande->id }}' ,
                data: $taskFrom.serialize(),
                dataType: 'json',
                success: function (data) {
                    console.log(data);
                    if(data.status == 200) {
                        let el = generateTaskRow(data.task);
                        $(el).insertBefore($formRow);

                        $taskFrom.trigger('reset'); // clear form
                        $taskDate.val($departureDate.val()); // fill task date input
                    }
                }
            });
        });

        $tasksList.on('click', '.del-task-btn', function() {

            $this = $(this);
            taskID = $this.data('id');

            $.ajax({
                type: 'DELETE',
                // url: '{{ url("/tasks") }}',
                url: '{{ url("/tasks/") }}' + taskID,
                dataType: 'json',
                success: function (data) {
                    console.log(data);
                    if(data.status == 200) {
                        $('#task' + taskID).remove();
                    }
                }
            });
        });

        function generateTaskRow(task) {
            let el = '<tr id="task{0}">\n';
                el += '<th scope="row">{1}</th>\n';
                el += '<td>{2}</td>\n';
                el += '<td>{3}</td>\n';
                el += '<td>{4}</td>\n';
                el += '<td class="text-center"><button class="del-task-btn btn btn-danger" data-id="{0}">Supprimer</button></td>\n';
                el += '</tr>\n';

                return el.format(task.id, task.date, task.start, task.end, task.name);
        }
    </script>
@endsection
