<?php $supplier = $function->getData('supplier', 'id', $row['id']); ?>

<!-- Delete Supplier Modal -->
<div class="modal fade" id="delete<?php echo $row['id']; ?>">
  <div class="modal-dialog modal-sm">
    <div class="card card-danger modal-content">
      <div class="card-header">
        <h3 class="card-title">DELETE SUPPLIER</h3>
      </div>
      <div class="card-body">

        <div class="form-group row">
          <div class="col-sm-12">
            <p>Are you sure you want to delete this supplier?</p>
            <b><?php echo $row['name']; ?></b>
          </div>
        </div>
      </div>
      <div class="card-footer">
        <form method="post" action="<?php echo '?supplier_id='. $row['id']; ?>" class="form-horizontal">
          <button type="submit" class="btn btn-default float-left">Cancel</button>
          <button type="submit" name="delete_supplier" class="btn btn-danger float-right">Yes</button>
        </form>
      </div>
    </div>
  </div>
</div>