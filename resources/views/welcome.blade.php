<x-layout>
    <div class="container  bg-light vh-100">
        <h1 class="text-center text-white "><span class="bg-primary p-2 rounded text-uppercase">
                student information
            </span></h1>

        <a href="/create" class="btn btn-primary mt-3">Enter new student</a>
        <table class="table table-success table-striped">
            <thead>
            <tr>
                <th >Id</th>
                <th >Name</th>
                <th >Email</th>
                <th >Phone Number</th>
                <th>Class</th>
                <th>Group</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($students as $student)
                <tr>
                    <td>{{$student->id}}</td>
                    <td>{{$student->name}}</td>
                    <td>{{$student->email}}</td>
                    <td>{{$student->phone_no}}</td>
                    <td>{{$student->class}}</td>
                    <td>{{$student->group}}</td>
                    <td><span >
                    <a href="/edit/{{$student->id}}" class="btn btn-primary text-white">Edit</a>
                </span>
                        <span >
                    <a href="/delete/{{$student->id}}" class="btn btn-primary text-white">Delete</a>
                </span>

                    </td>

                </tr>
            @endforeach

            </tbody>
        </table>
    </div>
</x-layout>
