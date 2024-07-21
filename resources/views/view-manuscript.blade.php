@extends('layout')

@section('title', 'Journals')

<!-- this is journal page -->

@section('content')

<style>
    thead {
        background-color: pink;
        color : #fff
    }
</style>

<div class="container">
    <div class="row journal-list">
        <div class="col-8">
            <div>
                <h4>ManuScript Details</h4>
            </div>
            <table class="table">
                <thead>

                    <tr>
                        <td scope="row">Manuscript No</td>
                        <td>84djsndj</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td scope="row">Manuscript Title</td>
                        <td>backend Manuscript Title</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td scope="row">Authors Name</td>
                        <td>mriganka hazarika</td>
                    </tr>
                </tbody>
            </table>
            <table class="table">
                <thead>
                    <tr>
                        <td scope="row">Date </td>
                        <td>Status</td>
                        <td>Corresponsing Author</td>
                        <td>Journal Name</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td scope="row">Manuscript Title</td>
                    </tr>
                    <tr>
                        <td scope="row">Authors Name</td>
                        <td>mriganka hazarika</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<br>
<br>

@endsection