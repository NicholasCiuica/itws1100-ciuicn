<div class="navbar">
  <ul>
    <!-- Intro to ITWS dropdown links -->
    <li>
        <div class="dropdown">
          <a>Intro to ITWS</a>
          <div class="dropdown-content">
              <ul>
                <li>
                    <div class="dropdown">
                      <a href="/iit/classes/IntroITWS/labs/">Labs</a>
                      <div class="dropdown-content">
                          <ul>
                            <?php
                              include($_SERVER['DOCUMENT_ROOT'] . "/iit/quiz3/conn.php");
                              $db = new mysqli($hostname, $username, $password, $database);

                              if ($db->connect_error) {
                                  echo '<div class="messages">Could not connect to the database. Error: ';
                                  echo $db->connect_error . '</div>';
                              }

                              $query = 'SELECT * FROM `myLabs`';
                              $result = $db->query($query);
                              $numRecords = $result->num_rows;

                              for ($i = 0; $i < $numRecords; $i++) {
                                  $record = $result->fetch_assoc();
                                  echo '<li><a href="/iit/classes/IntroITWS/labs/' . $record["link"] . '">';
                                  echo $record["title"] . '</a></li>';
                              }
                            ?>
                          </ul>
                      </div>
                    </div>
                </li>
              </ul>
          </div>
        </div>
    </li>
    <!-- External Links dropdown links -->
    <li>
        <div class="dropdown">
          <a>External Links</a>
          <div class="dropdown-content">
              <ul>
                <li>
                    <a href="https://github.com/NicholasCiuica/itws1100-ciuicn">
                      <img class="logo" src="https://cdn-icons-png.flaticon.com/512/25/25231.png" alt="GitHub Logo">
                      Github
                    </a>
                </li>
                <li>
                    <a href="https://portal.azure.com/#view/Microsoft_Azure_DevTestLab/LabVirtualMachineMenuBlade/~/virtualMachine/id/%2Fsubscriptions%2F92cc93c6-57ae-4ede-ab97-56dd35308fb5%2Fresourcegroups%2Fstudent-dtlab%2Fproviders%2Fmicrosoft.devtestlab%2Flabs%2Fitws-student-dtlab-rpi%2Fvirtualmachines%2FciuicnRPI">
                      <img class="logo" src="https://swimburger.net/media/ppnn3pcl/azure.png" alt="Azure Logo">
                      Azure
                    </a>
                </li>
              </ul>
          </div>
        </div>
    </li>
  </ul>
</div>