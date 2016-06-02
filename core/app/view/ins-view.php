<?php if(isset($_GET["opt"]) && $_GET["opt"]=="all"):

$ops = OperationData::getAllByKind(1);
?>
<div class="container">
<div class="row">
<div class="col-md-12">

<h2>Entradas</h2>
<a href="./?view=ins&opt=new" class="btn btn-default">Nueva entrada</a><br><br>

<?php if(count($ops)>0):?>
	<table class="table table-bordered table-hover ">
	<thead>
	<th>Id</th>
	<th>Concepto</th>		
	<th>Descripcion</th>		
	<th>Monto</th>		
	<th>Fecha</th>
	<th></th>
	</thead>
	<?php foreach($ops as $op):?>
	<tr>
	<td><?php echo $op->id;?></td>
	<td><?php echo $op->concept;?></td>		
	<td><?php echo $op->description;?></td>		
	<td>$ <?php echo $op->amount;?></td>		
	<td><?php echo $op->date_at;?></td>		
	<td style="width:160px;">
		<a href="./?view=ins&opt=edit&id=<?php echo $op->id;?>" class="btn btn-warning btn-xs"><i class="glyphicon glyphicon-pencil"></i> Editar</a>
		<a href="./?action=operations&opt=del&id=<?php echo $op->id;?>&k=1" class="btn btn-danger btn-xs"><i class="glyphicon glyphicon-trash"></i> Eliminar</a>

	</td>
	</tr>
	<?php endforeach;?>
	</table>
<?php else:?>
<p class="alert alert-danger">No hay entradas</p>
<?php endif; ?>

</div>
</div>
</div>
<?php elseif(isset($_GET["opt"]) && $_GET["opt"]=="new"):?>
<div class="container">
<div class="row">
<div class="col-md-12">
<h2>Nueva entrada</h2>
<div class="row">
<div class="col-md-8">
<form method="post" action="./?action=operations&opt=addin">
  <div class="form-group">
    <label for="exampleInputEmail1">Fecha (yyyy-mm-dd)</label>
    <input type="date" name="date_at" required class="form-control"  >
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Concepto</label>
    <input type="text" name="concept" required class="form-control"  placeholder="Concepto">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Descripcion</label>
    <textarea class="form-control" name="description" placeholder="Descripcion"></textarea>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Monto</label>
<div class="input-group">
  <span class="input-group-addon">$</span>
  <input type="text" class="form-control"  placeholder="Monto $" name="amount">
</div>
  </div>
  <button type="submit" class="btn btn-primary">Agregar Entrada</button>
</form>
</div>
</div>

</div>
</div>
</div>

<?php elseif(isset($_GET["opt"]) && $_GET["opt"]=="edit"):
$x = OperationData::getById($_GET["id"]);
if($x->kind!=1){ Core::redir("./?view=ins&opt=all");}
?>
<div class="container">
<div class="row">
<div class="col-md-12">
<h2>Editar entrada</h2>
<div class="row">
<div class="col-md-8">
<form method="post" action="./?action=operations&opt=updatein">
  <div class="form-group">
    <label for="exampleInputEmail1">Fecha (yyyy-mm-dd)</label>
    <input type="date" name="date_at" value="<?php echo $x->date_at;?>" required class="form-control"  >
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Concepto</label>
    <input type="text" name="concept" required  value="<?php echo $x->concept;?>"  class="form-control"  placeholder="Concepto">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Descripcion</label>
    <textarea class="form-control" name="description" placeholder="Descripcion"><?php echo $x->description;?></textarea>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Monto</label>
<div class="input-group">
  <span class="input-group-addon">$</span>
  <input type="text" class="form-control" value="<?php echo $x->amount;?>"  placeholder="Monto $" name="amount">
</div>
  </div>
  <input type="hidden" name="id" value="<?php echo $x->id; ?>">
  <button type="submit" class="btn btn-success">Actualizar Entrada</button>
</form>
</div>
</div>

</div>
</div>
</div>

<?php endif;?>




