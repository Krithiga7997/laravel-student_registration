<!DOCTYPE html>
<html>
    <head>
        <title>Student Approval</title>        
    </head>
    <body>
        @if(session('success'))
            <p>{{ session('success') }}</p>
        @endif

        <table>
            <thead>
                <tr>
                    <th>Student Name</th>
                    <th>Registration No</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($students as $student)
                    <tr>
                        <td>{{ $student->name }}</td>
                        <td>{{ $student->register_number }}</td>
                        <td>
                            <form method="POST" action="/hod/approve/{{ $student->id }}">
                                @csrf
                            <button type="submit">Approve</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </body>
</html>

