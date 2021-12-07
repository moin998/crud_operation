<x-layout>

    <body>

    <div class="container bg-light vh-100">

        <h1 class=" text-center pt-5 text-warning">Update Student Information</h1>

        @include('components.error')
        <form method='post' action="/update/{{$student->id}} ">
            @csrf


            <div class="mb-3">
                <label for="name" class="form-label">name</label>
                <input type="text" class="form-control " name="name" value="{{$student->name}}" id="name" >
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">email</label>
                <input type="text" class="form-control"  name="email" value="{{$student->email}}" id="email" >
            </div>

            <div class="mb-3">
                <label for="phone_no" class="form-label">Phone Number</label>
                <input type="text"class="form-control" name="phone_no"  value="{{$student->phone_no}}" id="phone_no">
            </div>

            <div class="mb-3">
                <label for="class" class="form-label">Class</label>
                <input type="text" name="class" class="form-control" value="{{$student->class}}" id="class">
            </div>

            <div class="mb-3">
                <label for="group" class="form-label">Group</label>
                <input type="text" name="group" class="form-control" value="{{$student->group}}" id="group">
            </div>

            <button type="submit" class="btn btn-primary">Update Information</button>
        </form>
    </div>
</x-layout>
