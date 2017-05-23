<?php
    include_once "../root/header.php";
?>
    <div class="clearfix"></div><br>
    <div class="col-lg-1 col-md-1"></div>
    <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12 contentBody">
        <p class="text-primary">Setting up your datalake, Please wait...</p>
        <div class="progress">
            <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width:0%">
                <span>0% Complete</span>
            </div>
        </div>
        <div class="clearfix"></div>
        <br>
        <div class="messages text-success"></div>
        <div class="row grid">
            <div class="grid-item col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="crosscheckPanel">
                    <h3><span class="label label-warning">S3 Checks</span></span></h3>
                    <div class="checkDiv s3-checks"></div>
                </div>
            </div>
            <div class="grid-item col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="crosscheckPanel">
                    <h3><span class="label label-default">DynamoDB Checks</span></h3>
                    <div class="checkDiv dynamodb-checks"></div>
                </div>
            </div>
            <div class="grid-item col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="crosscheckPanel">
                    <h3><span class="label label-success">RDS Checks</span></h3>
                    <div class="checkDiv rds-checks"></div>
                </div>
            </div>
            <div class="grid-item col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="crosscheckPanel">
                    <h3><span class="label label-info">Datapipeline Checks</span></h3>
                    <div class="checkDiv datapipeline-checks"></div>
                </div>
            </div>
            <div class="grid-item col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="crosscheckPanel">
                    <h3><span class="label label-danger">Redshift Checks</span></h3>
                    <div class="checkDiv redshift-checks"></div>
                </div>
            </div>
            <div class="grid-item col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="crosscheckPanel">
                    <h3><span class="label label-primary">Lambda Checks</span></h3>
                    <div class="checkDiv lambda-checks"></div>
                </div>
            </div>
            <div class="grid-item col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="crosscheckPanel">
                    <h3><span class="label label-success">EC2 Checks</span></h3>
                    <div class="checkDiv ec2-checks"></div>
                </div>
            </div>
            <div class="grid-item col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="crosscheckPanel">
                    <h3><span class="label label-default">Kinesis Checks</span></h3>
                    <div class="checkDiv kinesis-checks"></div>
                </div>
            </div>
            <div class="grid-item col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="crosscheckPanel">
                    <h3><span class="label label-info">validation Checks</span></h3>
                    <div class="checkDiv validation-checks"></div>
                </div>
            </div>
            <div class="grid-item col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="crosscheckPanel">
                    <h3><span class="label label-danger">Cloudtrail Checks</span></h3>
                    <div class="checkDiv cloudtrail-checks"></div>
                </div>
            </div>
            <div class="grid-item col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="crosscheckPanel">
                    <h3><span class="label label-warning">Other Checks</span></h3>
                    <div class="checkDiv other-checks"></div>
                </div>
            </div>
        </div>
        <script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>
        <script type="text/javascript">

            var messages = [
                ["Created S3 bucket","s3","bucket",true],
                ["Created S3 bucket policy","s3","buckey-policy",true],
                ["Created lambda execution role","s3","lambda-execution-role",true],
                ["Created Folders for uploads","s3","upload-folders",true],
                ["Created DynamoDB MASK table","dynamodb","mask-table",true],
                ["Created DynamoDB MAP table","dynamodb","map-table",true],
                ["Created DynamoDB STREAM table","dynamodb","stream-table",true],
                ["Created DynamoDB streams","dynamodb","dynamodb-stream",true],
                ["Elastic search Domain","validation","elastic-search",true],
                ["Kibana visualizations","validation","kibana",true],
                ["Created RDS instance","rds","rds-instance",true],
                ["Created Redshift Security group","redshift","redshift-sg",true],
                ["Created Redshift Cluster","redshift","redshift-cluster",true],
                ["Created ec2 IAM Role","ec2","ec2-iam-role",true],
                ["Created ec2 Instance","ec2","ec2-instance",true],
                ["Populated RDS databases","rds","populate-rds",true],
                ["Created Datapipelines","datapipeline","dp-exist",true],
                ["Updated Datapipelines definitions","datapipeline","dp-definitions",true],
                ["Activated Datapipelines","datapipeline","dp-activate",true],
                ["Final check Redshift database updates","redshift","redshift-db",true],
                ["Deactivated Datapipelines","datapipeline","dp-deactivate",true],
                ["Created Incremental Datapipelines","datapipeline","dp-incremental",true],
                ["Activated Incremental Datapipelines","datapipeline","dp-incremental-activate",true],
                ["Created Mysql Databases for user authentication","validation","mysql-validate",true],
                ["Created Cloudformation wait condition","other","cf-wait",true],
                ["Setup management portal","other","portal",true],
                ["Setup Zeppelin portal","other","zeppelin",true],
                ["Setup D3 dashboards","other","d3-dashboards",true],
                ["Created Stream","kinesis","stream",true],
                ["Created Catalog lambda Function IAM Role","lambda","lambda-iam-role",true],
                ["Created Catalog lambda Function","lambda","lambda-create",true],
                ["Created stream lambda Function IAM Role","lambda","stream-lambda-iam-role",true],
                ["Created stream lambda Function","lambda","stream-lambda-create",true],
                ["Updated Catalog lambda Function code","lambda","lambda-code",true],
                ["Created Catalog lambda Function trigger to S3","lambda","lambda-trigger",true],
                ["Created stream lambda Function trigger to S3","lambda","stream-lambda-trigger",true],
                ["Created Cloudtrail","cloudtrail","cloudtrail",true]
            ];

            function shuffle(array) {
                var len = array.length, swap, i;
                while (len) {
                    i = Math.floor(Math.random() * len--);
                    swap = array[len];
                    array[len] = array[i];
                    array[i] = swap;
                }
                return array;
            }

            messages = shuffle(messages);

            var op = $(".messages");
            var i=0;
            var timer = null;
            var interval = 1000;
            var totalChecksCount = messages.length;
            var progressFill = (100 / totalChecksCount);

            function updateMasonry(){
                $('.grid').masonry({
                    columnWidth: '.grid-item',
                    itemSelector: '.grid-item'
                });
            }

            function updateBar(){
                fillPercent = Math.floor(progressFill * i);
                $('.progress-bar').css('width', fillPercent+'%').attr('aria-valuenow', fillPercent);
                $('.progress-bar > span').html(fillPercent+"% Complete");
                updateMasonry();
            }

            function start() {
                timer = setTimeout(writeToConsole, interval);
            }

            function stop() {
                clearTimeout(timer);
                op.hide();
                setTimeout(redirect, interval*8);
            }

            function writeToConsole(){
                if (timer == null) return;
                op.html( "<p><span class=\"glyphicon glyphicon-cog\"></span> "+messages[i][0]+"</p>" );
                if(messages[i][3] == true) {
                    $("." + messages[i][1] + "-checks").append("<p class=\"text-success\"><span class=\"glyphicon glyphicon-ok-circle\"></span> " + messages[i][0] + "</p>");
                } else {
                    $("." + messages[i][1] + "-checks").append("<p class=\"text-danger\"><span class=\"glyphicon glyphicon-remove-circle\"></span> " + messages[i][0] + "</p>");
                }
                i++;
                updateBar();
                if(i < totalChecksCount){
                    start();
                } else {
                    stop();
                }
            }

            setTimeout(function(){
                $.ajax({
                    url: "../home/cleanup.php",
                    success: function(){
                        updateBar();
                    }
                });
                $.ajax({
                    url: "../scripts/catlog-lambda-trigger.php",
                    success: function(){
                        updateBar();
                    }
                });
                $.ajax({
                    url: "../scripts/stream-lambda-trigger.php",
                    success: function(){
                        updateBar();
                    }
                });
                $.ajax({
                    url: "../scripts/attach-iam-role-to-redshift.php",
                    success: function(){
                        updateBar();
                    }
                });
            }, interval);

            function redirect(){
                window.location.replace("../home/?relogin");
            }

            start();
        </script>
    </div>
    <div class="col-lg-1 col-md-1"></div>
<?php
include_once "../root/footer.php";
?>