@extends('layouts.master')
@section('content')

<div class="bg-light">
    <button class="btn btn-danger">show</button>
    <div class="row p-4">
        <div class="col-md-3">
            <div class="card p-4">
                <h3>Our organaigation</h3>
                <div class="d-flex about-sidebar">
                    <input type="checkbox" name="about[]" class="about" value="about_section">
                    <li>About Us</li>
                </div>
                <div class="d-flex about-sidebar">
                    <input type="checkbox" name="about">
                    <li>About</li>
                </div>
                <div class="d-flex about-sidebar">
                    <input type="checkbox" name="about">
                    <li>About</li>
                </div>
                <div class="d-flex about-sidebar">
                    <input type="checkbox" name="about">
                    <li>About</li>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card p-4">
                <h3>Our organaigation</h3>
                <p>It is a small and growing organaigation that made by us.It is a simple and good comoany for us and.It is a small and growing organaigation that made by us.It is a simple and good comoany for us andIt is a small and growing organaigation that made by us.It is a simple and good comoany for us andIt is a small and growing organaigation that made by us.It is a simple and good comoany for us and.It is a small and growing organaigation that made by us.It is a simple and good comoany for us and </p>
            </div>
        </div>
     </div>

    <div class="row">
        <div class="col-md-5 p-3">
            <form action="/aboutNgo" method="post">
                @csrf
                <div class="from-group row">
                    <label for="location">LOCATION</label>
                    <input type="text" name="location" class="location">
                </div>
                <div class="from-group row">
                    <label for="ngo">NGO NAME</label>
                    <input type="text" name="ngo" class="ngo">
                </div>
                <div class="from-group row">
                    <label for="nature">NATURE</label>
                    <input type="text" name="nature" class="nature">
                </div>
                <div class="from-group row">
                   
                    <input type="submit">
                </div>
                
            </form>
        </div>
        <div class="col-md-5">
            <table class="table" border="1">
                <tr>
                    <th>Location</th>
                    <th>NGO</th>
                    <th>Nature</th>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </table>
        </div>
    </div>
</div>
@endsection