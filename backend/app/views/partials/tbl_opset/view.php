<?php 
//check if current user role is allowed access to the pages
$can_add = ACL::is_allowed("tbl_opset/add");
$can_edit = ACL::is_allowed("tbl_opset/edit");
$can_view = ACL::is_allowed("tbl_opset/view");
$can_delete = ACL::is_allowed("tbl_opset/delete");
?>
<?php
$comp_model = new SharedController;
$page_element_id = "view-page-" . random_str();
$current_page = $this->set_current_page_link();
$csrf_token = Csrf::$token;
//Page Data Information from Controller
$data = $this->view_data;
//$rec_id = $data['__tableprimarykey'];
$page_id = $this->route->page_id; //Page id from url
$view_title = $this->view_title;
$show_header = $this->show_header;
$show_edit_btn = $this->show_edit_btn;
$show_delete_btn = $this->show_delete_btn;
$show_export_btn = $this->show_export_btn;
?>
<section class="page" id="<?php echo $page_element_id; ?>" data-page-type="view"  data-display-type="table" data-page-url="<?php print_link($current_page); ?>">
    <?php
    if( $show_header == true ){
    ?>
    <div  class="bg-light p-3 mb-3">
        <div class="container">
            <div class="row ">
                <div class="col ">
                    <h4 class="record-title">View  Opset</h4>
                </div>
            </div>
        </div>
    </div>
    <?php
    }
    ?>
    <div  class="">
        <div class="container">
            <div class="row ">
                <div class="col-md-12 comp-grid">
                    <?php $this :: display_page_errors(); ?>
                    <div  class="card animated fadeIn page-content">
                        <?php
                        $counter = 0;
                        if(!empty($data)){
                        $rec_id = (!empty($data['id_aset']) ? urlencode($data['id_aset']) : null);
                        $counter++;
                        ?>
                        <div id="page-report-body" class="">
                            <table class="table table-hover table-borderless table-striped">
                                <!-- Table Body Start -->
                                <tbody class="page-data" id="page-data-<?php echo $page_element_id; ?>">
                                    <tr  class="td-kode_aset">
                                        <th class="title"> Kode Aset: </th>
                                        <td class="value">
                                            <span <?php if($can_edit){ ?> data-value="<?php echo $data['kode_aset']; ?>" 
                                                data-pk="<?php echo $data['id_aset'] ?>" 
                                                data-url="<?php print_link("tbl_opset/editfield/" . urlencode($data['id_aset'])); ?>" 
                                                data-name="kode_aset" 
                                                data-title="Enter Kode Aset" 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="text" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" <?php } ?>>
                                                <?php echo $data['kode_aset']; ?> 
                                            </span>
                                        </td>
                                    </tr>
                                    <tr  class="td-nama_aset">
                                        <th class="title"> Nama Aset: </th>
                                        <td class="value">
                                            <span <?php if($can_edit){ ?> data-value="<?php echo $data['nama_aset']; ?>" 
                                                data-pk="<?php echo $data['id_aset'] ?>" 
                                                data-url="<?php print_link("tbl_opset/editfield/" . urlencode($data['id_aset'])); ?>" 
                                                data-name="nama_aset" 
                                                data-title="Enter Nama Aset" 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="text" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" <?php } ?>>
                                                <?php echo $data['nama_aset']; ?> 
                                            </span>
                                        </td>
                                    </tr>
                                    <tr  class="td-alamat">
                                        <th class="title"> Alamat: </th>
                                        <td class="value">
                                            <span <?php if($can_edit){ ?> data-value="<?php echo $data['alamat']; ?>" 
                                                data-pk="<?php echo $data['id_aset'] ?>" 
                                                data-url="<?php print_link("tbl_opset/editfield/" . urlencode($data['id_aset'])); ?>" 
                                                data-name="alamat" 
                                                data-title="Enter Alamat" 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="text" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" <?php } ?>>
                                                <?php echo $data['alamat']; ?> 
                                            </span>
                                        </td>
                                    </tr>
                                    <tr  class="td-luas_bangunan">
                                        <th class="title"> Luas Bangunan: </th>
                                        <td class="value">
                                            <span <?php if($can_edit){ ?> data-value="<?php echo $data['luas_bangunan']; ?>" 
                                                data-pk="<?php echo $data['id_aset'] ?>" 
                                                data-url="<?php print_link("tbl_opset/editfield/" . urlencode($data['id_aset'])); ?>" 
                                                data-name="luas_bangunan" 
                                                data-title="Masukan (0) jika kosong" 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="text" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" <?php } ?>>
                                                <?php echo $data['luas_bangunan']; ?> 
                                            </span>
                                        </td>
                                    </tr>
                                    <tr  class="td-tahun_bangunan">
                                        <th class="title"> Tahun Bangunan: </th>
                                        <td class="value">
                                            <span <?php if($can_edit){ ?> data-value="<?php echo $data['tahun_bangunan']; ?>" 
                                                data-pk="<?php echo $data['id_aset'] ?>" 
                                                data-url="<?php print_link("tbl_opset/editfield/" . urlencode($data['id_aset'])); ?>" 
                                                data-name="tahun_bangunan" 
                                                data-title="Masukan (0) jika Kosong" 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="number" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" <?php } ?>>
                                                <?php echo $data['tahun_bangunan']; ?> 
                                            </span>
                                        </td>
                                    </tr>
                                    <tr  class="td-luas_tanah">
                                        <th class="title"> Luas Tanah: </th>
                                        <td class="value">
                                            <span <?php if($can_edit){ ?> data-value="<?php echo $data['luas_tanah']; ?>" 
                                                data-pk="<?php echo $data['id_aset'] ?>" 
                                                data-url="<?php print_link("tbl_opset/editfield/" . urlencode($data['id_aset'])); ?>" 
                                                data-name="luas_tanah" 
                                                data-title="Enter luas Tanah" 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="text" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" <?php } ?>>
                                                <?php echo $data['luas_tanah']; ?> 
                                            </span>
                                        </td>
                                    </tr>
                                    <tr  class="td-kategori_aset">
                                        <th class="title"> Kategori Aset: </th>
                                        <td class="value">
                                            <span <?php if($can_edit){ ?> data-source='<?php echo json_encode_quote(Menu :: $kategori_aset); ?>' 
                                                data-value="<?php echo $data['kategori_aset']; ?>" 
                                                data-pk="<?php echo $data['id_aset'] ?>" 
                                                data-url="<?php print_link("tbl_opset/editfield/" . urlencode($data['id_aset'])); ?>" 
                                                data-name="kategori_aset" 
                                                data-title="Select a value ..." 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="select" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" <?php } ?>>
                                                <?php echo $data['kategori_aset']; ?> 
                                            </span>
                                        </td>
                                    </tr>
                                    <tr  class="td-keterangan">
                                        <th class="title"> Keterangan: </th>
                                        <td class="value">
                                            <span <?php if($can_edit){ ?> data-pk="<?php echo $data['id_aset'] ?>" 
                                                data-url="<?php print_link("tbl_opset/editfield/" . urlencode($data['id_aset'])); ?>" 
                                                data-name="keterangan" 
                                                data-title="Enter Keterangan" 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="textarea" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" <?php } ?>>
                                                <?php echo $data['keterangan']; ?> 
                                            </span>
                                        </td>
                                    </tr>
                                    <tr  class="td-images">
                                        <th class="title"> Images: </th>
                                        <td class="value"><?php Html :: page_img($data['images'],150,150,3); ?></td>
                                    </tr>
                                </tbody>
                                <!-- Table Body End -->
                            </table>
                        </div>
                        <div class="p-3 d-flex">
                            <div class="dropup export-btn-holder mx-1">
                                <button class="btn btn-sm btn-primary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fa fa-save"></i> Export
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <?php $export_print_link = $this->set_current_page_link(array('format' => 'print')); ?>
                                    <a class="dropdown-item export-link-btn" data-format="print" href="<?php print_link($export_print_link); ?>" target="_blank">
                                        <img src="<?php print_link('assets/images/print.png') ?>" class="mr-2" /> PRINT
                                        </a>
                                        <?php $export_pdf_link = $this->set_current_page_link(array('format' => 'pdf')); ?>
                                        <a class="dropdown-item export-link-btn" data-format="pdf" href="<?php print_link($export_pdf_link); ?>" target="_blank">
                                            <img src="<?php print_link('assets/images/pdf.png') ?>" class="mr-2" /> PDF
                                            </a>
                                            <?php $export_excel_link = $this->set_current_page_link(array('format' => 'excel')); ?>
                                            <a class="dropdown-item export-link-btn" data-format="excel" href="<?php print_link($export_excel_link); ?>" target="_blank">
                                                <img src="<?php print_link('assets/images/xsl.png') ?>" class="mr-2" /> EXCEL
                                                </a>
                                            </div>
                                        </div>
                                        <?php if($can_edit){ ?>
                                        <a class="btn btn-sm btn-info"  href="<?php print_link("tbl_opset/edit/$rec_id"); ?>">
                                            <i class="fa fa-edit"></i> Edit
                                        </a>
                                        <?php } ?>
                                    </div>
                                    <?php
                                    }
                                    else{
                                    ?>
                                    <!-- Empty Record Message -->
                                    <div class="text-muted p-3">
                                        <i class="fa fa-ban"></i> No Record Found
                                    </div>
                                    <?php
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
