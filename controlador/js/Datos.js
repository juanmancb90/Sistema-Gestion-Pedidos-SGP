
      google.load('visualization', '1', {'packages':['piechart']});
      google.setOnLoadCallback (drawChart);

      function drawChart() {
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Task');
        data.addColumn('number', 'Hours per Day');
        data.addRows ([
           ['Telemex', 10],
           ['Une', 10],
           ['Cable Union', 10],
           ['Telecaribe', 10],
        ]);
        var chart = new google.visualization.PieChart(document.getElementById('google-div'));
        chart.draw(data, {width: 280, height: 210, is3D: true, title: 'Nro de Suscriptores por Cable Operador'});
  }




