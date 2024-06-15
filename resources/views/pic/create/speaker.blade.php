@extends('pic.layout.app')

@section('content')
    <div class="form-container">
        <form>
            <div class="form-group">
                <label for="speakerName">Speaker Name</label>
                <input type="text" class="form-control" id="speakerName" placeholder="Name">
            </div>
            <div class="form-group">
                <label for="speakerDescription">Speaker Description</label>
                <textarea class="form-control" id="speakerDescription" rows="3"></textarea>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="startDate">Start Date</label>
                    <input type="date" class="form-control" id="startDate">
                </div>
                <div class="form-group col-md-6">
                    <label for="untilDate">End Date</label>
                    <input type="date" class="form-control" id="untilDate">
                </div>
            </div>

            <a href="" class="btn-green">Next</a>
        </form>
    </div>
@endsection
