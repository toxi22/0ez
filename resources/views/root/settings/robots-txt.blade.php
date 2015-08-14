@extends('root.main')

@section('body')
    <div class="container">
        <h1>{{ $title }}</h1>
        {!! Form::open(['route' => 'root-settings-robots-txt-save']) !!}
            <div>
                <div class="form-group">
                    <label for="inputRobotsTxt">
                        Robots.txt
                        <a href="http://www.robotstxt.org/robotstxt.html" target="_blank">
                            <i class="fa fa-question-circle"></i>
                        </a>
                    </label>
                    <textarea name="robots_txt" id="inputRobotsTxt" class="form-control">{{ $robots_txt or '' }}</textarea>
                </div>
            </div>
            <div>
                <div class="form-group">
                    <label for="inputHumansTxt">
                        Humans.txt
                        <a href="http://humanstxt.org/" target="_blank">
                            <i class="fa fa-question-circle"></i>
                        </a>
                    </label>
                    <textarea name="humans_txt" id="inputHumansTxt" class="form-control">{{ $humans_txt or '' }}</textarea>
                </div>
            </div>
            <div class="text-right">
                <a href="{{ route('root-settings') }}" class="btn btn-default">Cancel</a>
                <input type="submit" value="SAVE" class="btn btn-success"/>
            </div>
        {!! Form::close() !!}
    </div>
@stop