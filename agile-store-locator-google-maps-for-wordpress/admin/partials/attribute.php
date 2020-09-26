<!-- Container -->
<div class="asl-p-cont asl-new-bg">
<div class="hide">
  <svg xmlns="http://www.w3.org/2000/svg">
    <symbol id="i-plus" viewBox="0 0 32 32" width="13" height="13" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
        <title><?php echo __('Add','asl_admin') ?></title>
        <path d="M16 2 L16 30 M2 16 L30 16" />
    </symbol>
    <symbol id="i-trash" viewBox="0 0 32 32" width="13" height="13" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
        <title><?php echo __('Trash','asl_admin') ?></title>
        <path d="M28 6 L6 6 8 30 24 30 26 6 4 6 M16 12 L16 24 M21 12 L20 24 M11 12 L12 24 M12 6 L13 2 19 2 20 6" />
    </symbol>
    <symbol id="i-edit" viewBox="0 0 32 32" width="13" height="13" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
        <title><?php echo __('Edit','asl_admin') ?></title>
        <path d="M30 7 L25 2 5 22 3 29 10 27 Z M21 6 L26 11 Z M5 22 L10 27 Z" />
    </symbol>
    <svg id="i-alert" viewBox="0 0 32 32" width="13" height="13" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
        <title><?php echo __('Warning','asl_admin') ?></title>
        <path d="M16 3 L30 29 2 29 Z M16 11 L16 19 M16 23 L16 25" />
    </svg>
  </svg>
</div>
  <div class="container">
    <div class="row asl-inner-cont">
      <div class="col-md-12">
        <div class="card p-0 mb-4">
          <h3 class="card-title"><?php echo __('Manage Brands','asl_admin') ?></h3>
          <div class="card-body">
            <div class="row">
              <div class="col-md-12 ralign" style="margin-bottom: 15px">
                <button type="button" id="btn-asl-delete-all" class="btn btn-danger mrg-r-10"><i><svg width="13" height="13"><use xlink:href="#i-trash"></use></svg></i><?php echo __('Delete Selected','asl_admin') ?></button>
                <button type="button" id="btn-asl-new-attr" class="btn btn-primary mrg-r-10"><i><svg width="13" height="13"><use xlink:href="#i-plus"></use></svg></i><?php echo __('New Brand','asl_admin') ?></button>
              </div>
            </div>
          	<table id="tbl_attribute" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th align="center">&nbsp;</th>
                    <th align="center"><input type="text" class="form-control" data-id="id"  placeholder="<?php echo __('Search ID','asl_admin') ?>"  /></th>
                    <th align="center"><input type="text" class="form-control" data-id="name"  placeholder="<?php echo __('Search Name','asl_admin') ?>"  /></th>
                    <th align="center">&nbsp;</th>
                    <th align="center">&nbsp;</th>
                  </tr>
                  <tr>
                    <th align="center"><a class="select-all"><?php echo __('Select All','asl_admin') ?></a></th>
                    <th align="center"><?php echo __('ID','asl_admin') ?></th>
                    <th align="center"><?php echo __('Name','asl_admin') ?></th>
                    <th align="center"><?php echo __('Created On','asl_admin') ?></th>
                    <th align="center"><?php echo __('Action','asl_admin') ?>&nbsp;</th>
                  </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>    	
<!-- asl-cont end-->

<!-- SCRIPTS -->
<script type="text/javascript">
var ASL_Instance = {
  title: 'Brand',
  name: 'brands',
	url: '<?php echo ASL_URL_PATH ?>'
};

window.addEventListener("load", function() {
  asl_engine.pages.manage_attribute(ASL_Instance);
});
</script>