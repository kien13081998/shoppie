<!--body wrapper start-->
<div class="wrapper">
<div class="row">
<div class="col-sm-12">
<section class="panel">
    <header class="panel-heading">
        Responsive table
                <span class="tools pull-right">
                    <a href="javascript:;" class="fa fa-chevron-down"></a>
                    <a href="javascript:;" class="fa fa-times"></a>
                 </span>
    </header>
    <div class="panel-body">
        <section id="unseen">
            <table class="table table-bordered table-striped table-condensed">
                <thead>
                <tr>
                  <th>id</th>
                  <th>name</th>
                  <th>detail</th>
                </tr>
                </thead>
                <tbody>
                  <?php
                    foreach($news as $k => $v ): ?>
                    <tr>
                      <td>{!! $v['id'] !!}</td>
                      <td>{!! $v['name'] !!}</td>
                      <td>{!! $v['detail'] !!}</td>
                    <td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </section>
    </div>
</section>
</div>
</div>
</div>
