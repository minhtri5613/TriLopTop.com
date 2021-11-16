 
        <meta charset="UTF-8">
    <!--Load the AJAX API-->
    <script type="text/javascript" src="https://www.google.com/jsapi"></script>
    <script type="text/javascript">
     google.load('visualization', '1.0', {'packages':['corechart']});
     google.setOnLoadCallback(drawVisualization);
     function drawVisualization() {
		 				//thống kê số lượng bán hàng theo mặt hàng vẽ bieu do tron
          var data = new google.visualization.DataTable();
          var tenhh = new Array();
          var slban = new Array();
          var dataTenhh = 0;
          var dataSlban = 0;
          var rows = new Array();
          <?php
            $hh = new HangHoa();
            $result = $hh->getThongKeHH();
            while($set = $result->fetch())
            {
              $tenhh = $set['tenhh'];
              $slban = $set['soluongban'];
              echo "tenhh.push('".$tenhh."');";
              echo "slban.push('".$slban."');";
            }
            ?>
            for(var i = 0; i<tenhh.length; i++)
            {
              dataTenhh = tenhh[i];
              dataSlban = parseInt(slban[i]);
              rows.push([dataTenhh,dataSlban]);
            }
            data.addColumn('string',"Hàng Hóa");
            data.addColumn('number',"Số lượng bán");
            data.addRows(rows);
            var options = {
              title: 'Thống kê mặt hàng',
              'width': 600,
              'height': 400,
              'backgroundColor': '#fff',
              'is3D': true,
            };
            var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
            var chart1 = new google.visualization.ScatterChart(document.getElementById('chart_div1'));
            chart.draw(data,options);
            chart1.draw(data,options);
	 }
                   
    </script>
        <div class="thongke">
        <div style=" width:50%;  float: left;"   id="chart_div">vi tri</div>
        <div style=" width:50%;  float: right"   id="chart_div1">dsfd</div>    
      </div>
 
 