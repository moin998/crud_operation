<x-layout>
    <div class="container bg-light vh-100">

        <h1 class=" text-center pt-5 text-warning">Enter Student Information</h1>

        @include('components.error')
        <form method='post' action="/store">
            @csrf

            <div class="mb-3 mt-5">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" name="name" value="{{old('name')}}" id="name" >
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="text" class="form-control"  name="email" value="{{old('email')}}" id="email" >
            </div>
            <div class="mb-3">
                <label for="phone_no" class="form-label">Phone Number</label>
                <input type="text" name="phone_no" class="form-control value="{{old('phone_no')}}">
            </div>

            <div class="mb-3">
                <label for="class" class="form-label">Class</label>
                <input type="text" name="class" class="form-control value="{{old('class')}}">
            </div>

            <div class="mb-3">
                <label for="group" class="form-label">Group</label>
                <input type="text" name="group" class="form-control value="{{old('group')}}">
            </div>




            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</x-layout>
