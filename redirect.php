<? session_start(); ?>
<!DOCTYPE html>
<?php require_once './fetcher.php'; ?>
<html lang="en">

<head>

  <?php include 'components/header.php'; ?>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
  <title>Check Hours</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link rel="stylesheet" href="./static/css/style_hours.css">
</head>

<body>
  <?php include 'components/navbar.php'; ?>
  <div class="container">
    <a href="./logout.php" class="btn btn-outline-danger">
      <div id="logout">Logout</div>
    </a>

    <?php
    $sem_indx = 0;
    ?>

    <?php foreach ($data as $sem_name => $sem_events) : $sem_indx++; ?>
      <div style="padding: 15px;">
        <h4 data-toggle="collapse" <?php echo 'href="' . '#sem_' . $sem_indx . '"'; ?>>
          <?php echo $sem_name . " (" . $semwise_total[$sem_name] . ") "; ?>
        </h4>
        <div <?php echo 'id="' . 'sem_' . $sem_indx . '"'; ?> class="collapse show">
          <table class="table table-striped table-hover table-bordered">
            <thead class='thead-dark'>
              <tr>
                <th>
                  Event Name
                </th>
                <th>
                  Hours
                </th>
              </tr>

            </thead>
            <tbody>
              <?php foreach ($sem_events as $event_name => $event_hours) : ?>
                <tr>
                  <td>
                    <?php echo $event_name; ?>
                  </td>
                  <td>
                    <?php echo $event_hours; ?>
                  </td>
                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
        <!-- <canvas id="skillsChart"></canvas> -->
      </div>
    <?php endforeach; ?>

  </div>

  <?php include 'components/footer.php'; ?>

  <!-- jQuery -->
  <?php include 'components/scripts.php'; ?>
  <!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.bundle.min.js'></script>
  <script src='https://code.jquery.com/jquery-2.2.4.min.js'></script>
  <script>
    /* #####################################################################*/
    function addEntry(data, country, visits) {
      data.push({
        country,
        visits
      });
    }
    /* #####################################################################*/
    // var records = 
    // PHP
    // echo json_encode($records[0]);

    // // ["10", "12", "2", "3", "4", "2"];
    // // <?php  ?>;
    // // echo json_encode($records);
    // var tags = 
    // PHP
    // echo json_encode($tags[0]);    

    // // ["qweq", "qeqw", "qew", "wqe", "qwewq", "rrs"];

    // records.forEach((hours, index) => {
    //   if (index < 3 || index == records.length - 1) { // First 3 cols are for user info, last one is for total hours !
    //     return;
    //   }
    //   const eventName = tags[index];
    //   const tBody = document.getElementById("tBody");
    //   if (eventName && hours) {
    //     tBody.innerHTML += `
    //   <tr>
    //     <td>
    //       ${eventName}
    //     </td>
    //     <td>
    //       ${hours}
    //     </td>
    //   </tr>
    //   `;
    //   }
    // })
    // <?php  ?>;
    // echo json_encode($tags);

    // let data =
    // PHP
    // echo json_encode($data);
    /*
    data = {
      "Session 19-20" : {
        "Event 1": 34,
        "Event 2": 12,
        "Event 3": 13,
      }
    }
    for(let semName in data){
    let semEvents = data[semName];
    for(let event in semEvents){
        let hours = semEvents[event];
        console.log(`${event} : ${hours}`);
    }
}
    */
  </script>
  <script src="./static/js/script_hours.js"></script>

</body>

</html>