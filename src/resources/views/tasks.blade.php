<a class="btn btn-primary" href="#" role="button">Link</a>
<button class="btn btn-primary" type="メモ">Button</button>
<input class="btn btn-primary" type="" value="Input">
<input class="btn btn-primary" type="submit" value="Submit">
<input class="btn btn-primary" type="reset" value="Reset">



@extends('layouts.app')

        <p style="font-size:60px;">TODOリスト</p>


@section('content')

    <!-- Bootstrapの定形コード… -->


    <div class="panel-body">
        <!-- バリデーションエラーの表示 -->
        @include('common.errors')

        <!-- 新タスクフォーム -->
        <form action="{{ url('task') }}" method="POST" class="form-horizontal">
            {{ csrf_field() }}

            <!-- タスク名 -->
            <div class="form-group">
                <label for="task" class="col-sm-3 control-label">タスク</label>

                <div class="col-sm-6">
                    <input type="text" name="name" id="task-name" class="form-control">
                </div>
            </div>

            <!-- タスク追加ボタン -->
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-default">
                        <i class="fa fa-plus"></i> 優先度最高タスク
                    </button>
                </div>
            </div>
        </form>
    </div>

    <div class="form-group">
            <div class="col-sm-offset-3 col-sm-6">
                <button type="submit" class="btn btn-default">
                    <i class="fa fa-plus"></i> 優先度中程度タスク
                </button>
            </div>
        </div>
    </form>
</div>

<div class="form-group">
        <div class="col-sm-offset-3 col-sm-6">
            <button type="submit" class="btn btn-default">
                <i class="fa fa-plus"></i> 優先度小程度タスク
            </button>
        </div>
    </div>
</form>
</div>



  @if (count($tasks) > 0)
  <div class="panel panel-default">
<div class="panel-heading">
   Current Tasks
</div>

<div class="panel-body">
 <table class="table table-striped task-table">
    <thead>
        <td>Task</td>
         <td>&nbsp;</td>
    </thead>

    <tbody>
        @foreach ($tasks as $task)
        <tr>
        <td class="table-text"> {{ $task->name }}</td>

        <td>
            <form action="{{ url('task/'.$task->id) }}" method="POST">
                {{ csrf_field() }}
                {{ method_field('DELETE')}}



                <button class="btn btn-danger" type="submit">
                    <i class="fa fa-trash"></i> DELETE
                </button>
            </form>
        </td>
        </tr>
     @endforeach
    </tbody>

</table>


</div>

  </div>

  @endif

@endsection

