<?php
require_once 'header.php';
?>

<div class="container">
  <div class="bg-faded p-4 my-4">
    <hr class="divider">
    <h2 class="text-center text-lg text-uppercase my-0">
      <strong>Library</strong>
    </h2>
    <hr class="divider">
    <p>
      <div style="overflow-x:auto">
        <div align="center">
          <table id="library">
            <tbody>
              <tr>
                <th width="49">
                  <p>Sl no</p>
                </th>
                <th width="132">
                  <p>Branch/Course</p>
                </th>
                <th width="222">
                  <p>Daily Timings (IST)</p>
                </th>
                <th width="204">
                  <p>Weekend(Saturday) (IST)</p>
                </th>
              </tr>
              <tr>
                <td width="49">
                  <p>1</p>
                </td>
                <td width="132">
                  <p>B.A</p>
                </td>
                <td width="222">
                  <p>12:30 PM &ndash; 3:30 PM</p>
                </td>
                <td width="204">
                  <p>11:30AM- 1:30PM</p>
                </td>
              </tr>
              <tr>
                <td width="49">
                  <p>2</p>
                </td>
                <td width="132">
                  <p>B.Sc</p>
                </td>
                <td width="222">
                  <p>9:30 AM &ndash; 4:40 PM</p>
                </td>
                <td width="204">
                  <p>9:30 AM &ndash; 4:40 PM</p>
                </td>
              </tr>
              <tr>
                <td width="49">
                  <p>3</p>
                </td>
                <td width="132">
                  <p>B.Com</p>
                </td>
                <td width="222">
                  <p>9:30AM- 12:30 PM</p>
                </td>
                <td width="204">
                  <p>9:30 AM- 11:30 AM</p>
                </td>
              </tr>
              <tr>
                <td width="49">
                  <p>4</p>
                </td>
                <td width="132">
                  <p>BBA</p>
                </td>
                <td width="222">
                  <p>9:30 AM- 12:30 PM</p>
                </td>
                <td width="204">
                  <p>9:30 AM- 11:30 AM</p>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div></p>
    </div>
  </div>
  <!-- /.container -->

  <?php
  require_once 'footer.php';
  ?>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/popper/popper.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

</body>

</html>
