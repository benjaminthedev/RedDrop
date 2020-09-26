<?php


$class = '';

if($all_configs['display_list'] == '0' || $all_configs['first_load'] == '3' || $all_configs['first_load'] == '4')
  $class = ' map-full';

/*
if($all_configs['advance_filter'] == '0')
  $class .= ' no-asl-filters';

if($all_configs['advance_filter'] == '1' && $all_configs['layout'] == '1')
  $class .= ' asl-adv-lay1';
*/

//add Full height
$class .= ' '.$all_configs['full_height'];

$default_addr = (isset($all_configs['default-addr']))?$all_configs['default-addr']: '';


$container_class    = (isset($all_configs['full_width']) && $all_configs['full_width'])? 'container-fluid': 'container';
$geo_btn_class      = ($all_configs['geo_button'] == '1')?'asl-geo icon-target':'icon-search';
$geo_btn_text       = ($all_configs['geo_button'] == '1')?__('Current Location', 'asl_locator'):__('Search', 'asl_locator');
$search_type_class  = ($all_configs['search_type'] == '1')?'asl-search-name':'asl-search-address';
$panel_order        = (isset($all_configs['map_top']))?$all_configs['map_top']: '2';

?>
<style type="text/css">
    @media(max-width:991px){
        #asl-storelocator.asl-cont .asl-panel {order: <?php echo $panel_order ?>;}
    }
</style>
<section id="asl-storelocator" class="asl-cont asl-template-3 asl-layout-<?php echo $all_configs['layout']; ?> asl-bg-<?php echo $all_configs['color_scheme_3'].$class; ?> asl-text-<?php echo $all_configs['font_color_scheme'] ?>">
    <div class="asl-wrapper mb-5">
        <div class="<?php echo $container_class ?>">
            <div class="row">
                <div class="col-12 p-0">
                    <div class="sl-main-cont">
                        <div class="row no-gutters">
                            <div id="asl-panel" class="asl-panel col-lg-5">
                                <div class="asl-overlay" id="map-loading">
                                  <div class="white"></div>
                                    <div class="sl-loading"><img style="margin-right: 10px;" class="sl-loader" src="<?php echo ASL_URL_PATH ?>public/Logo/loading.gif"><?php echo __('Loading...', 'asl_locator') ?></div>
                                </div>
                                <div class="asl-filter-sec hide"></div>
                                <!-- list -->
                                <div class="asl-panel-inner">
                                    <div class="sl-filter-sec">
                                        <div class="asl-addr-search">
                                            <input value="<?php echo $default_addr ?>" id="sl-main-search" type="text" class="<?php echo $search_type_class ?> form-control" placeholder="<?php echo __( 'Enter your address', 'asl_locator') ?>">
                                            <span class="sl-search-btn"><i title="<?php echo $geo_btn_text ?>" class="<?php echo $geo_btn_class ?>"></i></span>
                                        </div>  
                                    </div>
                                    <div class="asl-filter-tabs media">
                                        <div class="input-group">
                                            <ul class="sl-filt-a-list nav nav-pills" role="tablist"></ul>  
                                            <div class="input-group-append">
                                                <div class="aswth-btn">
                                                    <span class="aswth">
                                                        <label></label>
                                                        <input type="checkbox" class="aswth-input" id="aswth-id" checked>
                                                        <label for="aswth-id"></label>
                                                    </span>
                                                    <div class="content-text">
                                                        <div class="contentA"><?php echo __('OPEN', 'asl_locator') ?></div>
                                                        <div class="contentB"><?php echo __('ALL', 'asl_locator') ?></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sl-main-cont-box">
                                        <div class="sl-list-wrapper">
                                            <ul id="p-statelist" class="sl-list">
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="directions-cont hide">
                                    <div class="agile-modal-header">
                                        <button type="button" class="close"><span aria-hidden="true">×</span></button>
                                        <h4><?php echo __( 'Store Direction', 'asl_locator') ?></h4>
                                    </div>
                                    <div class="rendered-directions" style="direction: ltr;"></div>
                                </div>
                            </div>
                            <div class="col-lg-7 asl-map">
                                <div class="map-image">
                                    <div id="asl-map-canv" class="asl-map-canv"></div>
                                    
                                    <div id="agile-modal-direction" class="agile-modal fade">
                                        <div class="agile-modal-backdrop-in"></div>
                                        <div class="agile-modal-dialog in">
                                            <div class="agile-modal-content">
                                                <div class="agile-modal-header">
                                                    <button type="button" class="close-directions close" data-dismiss="agile-modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                    <h4><?php echo __('Get Your Directions', 'asl_locator') ?></h4>
                                                </div>
                                                <div class="form-group">
                                                    <label for="frm-lbl"><?php echo __('From', 'asl_locator') ?>:</label>
                                                    <input type="text" class="form-control frm-place" id="frm-lbl" placeholder="<?php echo __('Enter a Location', 'asl_locator') ?>">
                                                </div>
                                                <div class="form-group">
                                                    <label for="frm-lbl"><?php echo __('To', 'asl_locator') ?>:</label>
                                                    <input readonly="true" type="text"  class="directions-to form-control" id="to-lbl" placeholder="<?php echo __('Prepopulated Destination Address', 'asl_locator') ?>">
                                                </div>
                                                <div class="form-group mb-0">
                                                    <span for="frm-lbl"><?php echo __('Show Distance In', 'asl_locator') ?></span>
                                                    <label class="checkbox-inline">
                                                        <input type="radio" name="dist-type"  id="rbtn-km" value="0"> <?php echo __('KM', 'asl_locator') ?>
                                                    </label>
                                                    <label class="checkbox-inline">
                                                        <input type="radio" name="dist-type" checked id="rbtn-mile" value="1"> <?php echo __('Mile', 'asl_locator') ?>
                                                    </label>
                                                </div>
                                                <div class="form-group mb-0">
                                                    <button type="submit" class="btn btn-default btn-submit"><?php echo __('GET DIRECTIONS', 'asl_locator') ?></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div id="asl-geolocation-agile-modal" class="agile-modal fade">
                                      <div class="agile-modal-backdrop-in"></div>
                                      <div class="agile-modal-dialog in">
                                        <div class="agile-modal-content">
                                          <button type="button" class="close-directions close" data-dismiss="agile-modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                          <?php if($all_configs['prompt_location'] == '2'): ?>
                                          <div class="form-group">
                                            <h4><?php echo __('LOCATE YOUR GEOPOSITION', 'asl_locator') ?></h4>
                                          </div>
                                          <div class="form-group">
                                            <div class="row">
                                            <div class="col-lg-9">
                                              <input type="text" class="form-control" id="asl-current-loc" placeholder="<?php echo __('Your Address', 'asl_locator') ?>">
                                            </div>
                                            <div class="col-lg-3 pl-lg-0">
                                              <button type="button" id="asl-btn-locate" class="btn btn-block btn-default"><?php echo __('LOCATE', 'asl_locator') ?></button>
                                            </div>
                                            </div>
                                          </div>
                                          <?php else: ?>
                                          <div class="form-group">
                                            <h4><?php echo __('Use my location to find the closest Service Provider near me', 'asl_locator') ?></h4>
                                          </div>
                                          <div class="form-group text-center">
                                            <button type="button" id="asl-btn-geolocation" class="btn btn-block btn-default"><?php echo __('USE LOCATION', 'asl_locator') ?></button>
                                          </div>
                                          <?php endif; ?>
                                        </div>
                                      </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
    </div>
</section>
<?php
////*SCRIPT TAGS STARTS FROM HERE:: FROM EVERY THING BELOW THIS LINE:: VARIALBLE LIMIT IS NOT SUPPORTING LONGER HTML*////
if($atts['no_script'] == 0):
?>
<script id="tmpl_list_item" type="text/x-jsrender">
    <li class="sl-item" data-id="{{:id}}">
    {{if path}}
    <div class="sl-img-cont"><img src="<?php echo ASL_URL_PATH ?>public/Logo/{{:path}}" alt="" class="img-fluid" /></div>
    {{/if}}
    <div class="sl-addr-sec">
        <h3>{{:title}}</h3>
        {{if categories}}
            <div class="sl-cat-tag">
                <ul>
                {{for categories}}
                    <li>{{:name}}</li>
                {{/for}}
                </ul>
            </div>
        {{/if}}
        <div class="addr-loc">
            <ul>
                <li>
                    <i class="icon-address-card-o"></i>  
                    <span>{{:address}}</span>
                </li>
                {{if phone}}
                <li>
                    <i class="icon-mobile-1"></i>
                    <a href="tel:{{:phone}}">{{:phone}}</a>
                </li>
                {{/if}}
                {{if email}}
                <li>
                    <i class="icon-mail"></i>
                    <a href="mailto:{{:email}}">{{:email}}</a>
                </li>
                {{/if}}
                {{if open_hours}}
                <li>
                    <i class="icon-clock"></i>
                    <span class="txt-hours">{{:open_hours}}</span>
                </li>
                {{/if}}
            </ul>
        </div>
        <div class="sl-act-btns mt-2">
            <div class="row">
                <div class="col-6 ">
                    <a class="btn btn-asl s-direction"><i class="icon-compass"></i> <?php echo __( 'Directions','asl_locator') ?></a>
                </div>
                {{if dist_str}}
                <div class="col-6 ">
                    <span class="sl-dist-calc">{{:dist_str}}</span>
                </div>
                {{/if}}
            </div>
        </div>
    </div>
    </li>
</script>
<script id="asl_too_tip" type="text/x-jsrender">
    {{if path}}
    <div class="image_map_popup" style="display:none"><img src="{{:URL}}public/Logo/{{:path}}" /></div>
    {{/if}}
    <h3>{{:title}}</h3>
    <div class="infowindowContent">
    <div class="info-box-cont">
      <div class="row">
        <div class="col-md-12">
          <div class="{{if path}}info-addr{{else}}info-addr w-100-p{{/if}}">
            <div class="address"><i class="icon-address-card-o"></i><span>{{:address}}</span></div>
            {{if phone}}
            <div class="phone"><i class="icon-mobile-1"></i><a href="tel:{{:phone}}">{{:phone}}</a></div>
            {{/if}}
            {{if email}}
            <div class="p-time"><i class="icon-mail"></i><a href="mailto:{{:email}}" style="text-transform: lowercase">{{:email}}</a></div>
            {{/if}}
          </div>
          {{if path}}
          <div class="img_box" style="display:none">
            <img src="{{:URL}}public/Logo/{{:path}}" alt="logo">
          </div>
          {{/if}}
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
            <div class="asl-tt-details">
              {{if open_hours}}
              <div class="p-time"><i class="icon-clock"></i> <span>{{:open_hours}}</span></div>
              {{/if}}
              {{if show_categories && c_names}}
              <div class="categories asl-p-0"><i class="icon-tag"></i><span>{{:c_names}}</span></div>
              {{/if}}
              {{if dist_str}}
              <div class="distance"><?php echo __( 'Distance','asl_locator') ?>: {{:dist_str}}</div>
              {{/if}}
            </div>
        </div>
      </div>
    </div>
    <div class="asl-buttons"></div>
    </div><div class="arrow-down"></div>
</script>            
<?php endif; ?>