<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


<x-app-layout>
    <x-slot name="header">Quizler</x-slot>

    <div class="card" >
        <div class="card-body">
            <h5 class="card-title">
                <a href="{{route('quizes.create')}}" class="btn btn-sm btn-primary">Quiz Oluştur</a>
            </h5>
        </div>
    </div>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">Quiz</th>
            <th scope="col">Durum</th>
            <th scope="col">Bitiş Tarihi</th>
            <th scope="col">İşlemler</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($quizes as $quiz)
              
          <tr>
            <td >{{$quiz->title}}</td>
            <td>{{$quiz->status}}</td>
            <td>Ot{{$quiz->finished_at}}to</td>
            <td>
              <a href="" class="btn btn-sm btn-primary">edit</a>
              <a href="" class="btn btn-sm btn-danger">sil</a>

            </td>
          </tr>
          @endforeach

        </tbody>
      </table>
      {{$quizes->links()}}
</x-app-layout>