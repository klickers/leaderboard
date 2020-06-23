<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="icon" type="image/png" href="assets/img/favicon.ico">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

        <title>Leaderboard Results</title>

        <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />

        @yield('meta')

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.4.1/css/bootstrap.min.css">
        <link href="assets/css/fresh-bootstrap-table.css" rel="stylesheet" />
        <link href="assets/css/demo.css" rel="stylesheet" />

        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
        <link href="http://fonts.googleapis.com/css?family=Roboto:400,700,300" rel="stylesheet" type="text/css">

        <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <script src="https://unpkg.com/bootstrap-table/dist/bootstrap-table.min.js"></script>

        <script type='text/javascript' src='https://platform-api.sharethis.com/js/sharethis.js#property=5ef0d551a922da001296fb0d&product=sticky-share-buttons&cms=website' async='async'></script>
        
        @yield('head')
    </head>
    <body>

        @yield('content')

        @yield('scripts')
        <!--===============================================================================================-->
        <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
        <!--===============================================================================================-->
            <script src="vendor/bootstrap/js/popper.js"></script>
            <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
        <!--===============================================================================================-->
            <script src="vendor/select2/select2.min.js"></script>
        <!--===============================================================================================-->
        <script src="js/main.js"></script>
    </body>
    <script type="text/javascript">
        var $table = $('#fresh-table')
        var $alertBtn = $('#alertBtn')

        // window.operateEvents = {
        //   'click .like': function (e, value, row, index) {
        //     alert('You click like icon, row: ' + JSON.stringify(row))
        //     console.log(value, row, index)
        //   },
        //   'click .edit': function (e, value, row, index) {
        //     alert('You click edit icon, row: ' + JSON.stringify(row))
        //     console.log(value, row, index)
        //   },
        //   'click .remove': function (e, value, row, index) {
        //     $table.bootstrapTable('remove', {
        //       field: 'id',
        //       values: [row.id]
        //     })
        //   }
        // }

        function operateFormatter(value, row, index) {
          return [
             /* '<a rel="tooltip" title="Share" class="table-action share" href="javascript:void(0)" title="Share">',
                  '<i class="fa fa-share-alt"></i>',
                '</a>'*/
            /*'<a rel="tooltip" title="Like" class="table-action like" href="javascript:void(0)" title="Like">',
              '<i class="fa fa-heart"></i>',
            '</a>',
            '<a rel="tooltip" title="Edit" class="table-action edit" href="javascript:void(0)" title="Edit">',
              '<i class="fa fa-edit"></i>',
            '</a>',
            '<a rel="tooltip" title="Remove" class="table-action remove" href="javascript:void(0)" title="Remove">',
              '<i class="fa fa-remove"></i>',
            '</a>'*/
          ].join('')
        }

        $(function () {
          $table.bootstrapTable({
            classes: 'table table-hover',
            toolbar: '.toolbar',

            search: true,
            showRefresh: true,
            showToggle: true,
            showColumns: true,
            pagination: true,
            striped: true,
            sortable: true,
            pageSize: 10,
            pageList: [10, 25, 50, 100],

            formatShowingRows: function (pageFrom, pageTo, totalRows) {
              return ''
            },
            formatRecordsPerPage: function (pageNumber) {
              return pageNumber + ' rows visible'
            }
          })

          $alertBtn.click(function () {
            alert('You pressed on Alert')
          })
        })

        $('#sharrreTitle').sharrre({
          share: {
            twitter: true,
            facebook: true
          },
          template: '',
          enableHover: false,
          enableTracking: true,
          render: function (api, options) {
            $("#sharrreTitle").html('Thank you for ' + options.total + ' shares!')
          },
          enableTracking: true,
          url: location.href
        })

        $('#twitter').sharrre({
          share: {
            twitter: true
          },
          enableHover: false,
          enableTracking: true,
          buttons: { twitter: {via: 'CreativeTim'}},
          click: function (api, options) {
            api.simulateClick()
            api.openPopup('twitter')
          },
          template: '<i class="fa fa-twitter"></i> {total}',
          url: location.href
        })

        $('#facebook').sharrre({
          share: {
            facebook: true
          },
          enableHover: false,
          enableTracking: true,
          click: function (api, options) {
            api.simulateClick()
            api.openPopup('facebook')
          },
          template: '<i class="fa fa-facebook-square"></i> {total}',
          url: location.href
        })
      </script>

      <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga')

        ga('create', 'UA-46172202-1', 'auto')
        ga('send', 'pageview')

      </script>
</html>
