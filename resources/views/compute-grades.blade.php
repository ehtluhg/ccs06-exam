<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Student Grades</title>
  </head>
  <body>
      <div class="container-sm">
          <h1>Student's Average Grades</h1>

          <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th scope="col">Student Name</th>
                    <th scope="col">Midterm Grade</th>
                    <th scope="col">Finals Grade</th>
                    <th scope="col">Average</th>
                    <th scope="col">Remarks</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $student_1 }}</td>
                    <td>{{ $s1_midterm }}</td>
                    <td>{{ $s1_finals }}</td>
                    <td>{{ $s1_average }}</td>
                    <td>{{ $s1_remark }}</td>
                </tr>
                <tr>
                    <td>{{ $student_2 }}</td>
                    <td>{{ $s2_midterm }}</td>
                    <td>{{ $s2_finals }}</td>
                    <td>{{ $s2_average }}</td>
                    <td>{{ $s2_remark }}</td>
                </tr>
                <tr>
                    <td>{{ $student_3 }}</td>
                    <td>{{ $s3_midterm }}</td>
                    <td>{{ $s3_finals }}</td>
                    <td>{{ $s3_average }}</td>
                    <td>{{ $s3_remark }}</td>
                </tr>
                <tr>
                    <td>{{ $student_4 }}</td>
                    <td>{{ $s4_midterm }}</td>
                    <td>{{ $s4_finals }}</td>
                    <td>{{ $s4_average }}</td>
                    <td>{{ $s4_remark }}</td>
                </tr>
                <tr>
                    <td>{{ $student_5 }}</td>
                    <td>{{ $s5_midterm }}</td>
                    <td>{{ $s5_finals }}</td>
                    <td>{{ $s5_average }}</td>
                    <td>{{ $s5_remark }}</td>
                </tr>
            </tbody>
          </table>
       </div>
  </body>
</html>

