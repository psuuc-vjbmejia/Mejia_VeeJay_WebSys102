<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Information</title>
</head>
<style>
  .container {
    padding: 10px;
    justify-content: center;
    border: 1px solid black;
    margin: 0 auto;
    max-width: 250px;
}
</style>
<body >
    <div class="container">
        <h1 >Personal Information</h1>
        <hr>

        @if(session('success'))
            <p class="text-green-500" style="color: green;">{{ session('success') }}</p>
        @endif
        @if($errors->any())
            <ul class="list-disc list-inside text-red-500">
                @foreach($errors->all() as $error)
                    <li style="color: red;">{{ $error }}</li>
                @endforeach 
            </ul>
        @endif

        <form action="{{ route('Form') }}" method="post">
            @csrf
            <table class="w-full">
                <tbody>
                    <tr>
                        <td><label for="firstname">First Name</label></td>
                        <td ><input type="text" name="firstname" value="{{ old('firstname') }}" ></td>
                    </tr>
                    @error('firstname')
                        <tr>
                            <td></td>
                            <td class="text-red-500 text-sm" style="color: red;">{{ $message }}</td>
                        </tr>
                    @enderror

                    <tr>
                        <td><label for="lastname">Last Name</label></td>
                        <td ><input type="text" name="lastname" value="{{ old('lastname') }}" ></td>
                    </tr>
                    @error('lastname')
                        <tr>
                            <td></td>
                            <td class="text-red-500 text-sm" style="color: red;">{{ $message }}</td>
                        </tr>
                    @enderror

                    <tr>
                        <td><label>Sex</label></td>
                        <td >
                            <div class="flex items-center">
                                <input type="radio" name="Sex" value="male" >
                                <label for="male" >Male</label>
                                <input type="radio" name="Sex" value="female" >
                                <label for="female">Female</label>
                            </div>
                        </td>
                    </tr>
                    @error('Sex')
                        <tr>
                            <td></td>
                            <td class="text-red-500 text-sm" style="color: red;">{{ $message }}</td>
                        </tr>
                    @enderror

                    <tr>
                        <td><label for="Mobilephone">Mobile Phone</label></td>
                        <td ><input type="text" name="Mobilephone" value="{{ old('Mobilephone') }}" ></td>
                    </tr>
                    @error('Mobilephone')
                        <tr>
                            <td></td>
                            <td class="text-red-500 text-sm" style="color: red;">{{ $message }}</td>
                        </tr>
                    @enderror

                    <tr>
                        <td><label for="Telephone-Number">Tel No.</label></td>
                        <td ><input type="text" name="Telephone-Number" value="{{ old('Telephone-Number') }}" ></td>
                    </tr>
                    @error('Telephone-Number')
                        <tr>
                            <td></td>
                            <td class="text-red-500 text-sm" style="color: red;">{{ $message }}</td>
                        </tr>
                    @enderror

                    <tr>
                    <td><label for="Birthdate">Birth date</label></td>
                    <td><input type="text" name="Birthdate" value="{{ old('Birthdate') }}" placeholder="yyyy-mm-dd"></td>
                    </tr>
                    @error('Birthdate')
                        <tr>
                            <td></td>
                            <td class="text-red-500 text-sm" style="color: red;">{{ $message }}</td>
                        </tr>
                    @enderror

                    <tr>
                        <td><label for="Address">Address</label></td>
                        <td ><input type="text" name="Address" value="{{ old('Address') }}" ></td>
                    </tr>
                    @error('Address')
                        <tr>
                            <td></td>
                            <td class="text-red-500 text-sm" style="color: red;">{{ $message }}</td>
                        </tr>
                    @enderror

                    <tr>
                        <td><label for="Email">Email</label></td>
                        <td ><input type="email" name="Email" value="{{ old('Email') }}" ></td>
                    </tr>
                    @error('Email')
                        <tr>
                            <td></td>
                            <td class="text-red-500 text-sm" style="color: red;">{{ $message }}</td>
                        </tr>
                    @enderror

                    <tr>
                        <td><label for="Website">Website</label></td>
                        <td ><input type="url" name="Website" value="{{ old('Website') }}" ></td>
                    </tr>
                    @error('Website')
                        <tr>
                            <td></td>
                            <td class="text-red-500 text-sm" style="color: red;">{{ $message }}</td>
                        </tr>
                    @enderror
                    <tr>
                        <td></td>
                        <td><button type="submit">Submit</button></td>
                    </tr>
                </tbody>
            </table>
            <div >
                
            </div>
        </form>
    </div>
</body>
</html>