<?php include'inc/header.php'; ?>
<?php include'inc/menu.php';
include'inc/include.php';
$input=new funciones();
$db_default= $this->load->database('funcionarios', TRUE);?>
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-header with-border">
                  <p><h3 class="box-title ">REPORTES </h3></p>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                  </div>
                </div>
            <!-- /.box-header -->
                <div class="box-body">
                    <div class="row">
                        <div class="col-md-12">
                          <center>
                            <h2>Listado de compartidos en redes Sociales</h2><hr>
                          </center>
                        </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                      <table id="tabla" class="display table table-condensed" collspacign="0" width="100%">
                        <thead>
                         <tr >
                           <td>nº</td>
                           <td>Nombre</td>
                           <td>CI</td>
                           <td>Secretaria</td>
                            <td>Compartidos en facebook</td>
                           <td>Compartidos en twitter</td>
                           <td>Total Compartidos</td>
                           <td>Cantidad de amigos en F</td>
                         </tr>
                        </thead>
                        <tbody>
                          <?php $n=0; foreach ($mostrar->result_array()  as  $row)
                          {
                           $id_c=$row['id_c'];
                           $n++;
                           $f_query=$this->db->query("SELECT fa.amigos_facebook as amigosfac FROM facebook as fa where fa.id_funcionario=$id_c");
                           $facamigos=$f_query->row();
                           
                           $query=$this->db->query("SELECT (SELECT sum(c.cantidad) FROM control_compartidos as c WHERE c.tipo_red='fb' and c.id_funcionario=$id_c) as face, 
                                                   (SELECT sum(c.cantidad) FROM control_compartidos as c WHERE c.tipo_red='tw' and c.id_funcionario=$id_c) as twitt,
                                                   (SELECT sum(c.cantidad) FROM control_compartidos as c WHERE c.id_funcionario=$id_c and c.tipo_red <>'') as  sumaredes
                                                   FROM trabajadores as tr where tr.id_c>=1 and tr.id_c=$id_c");
                           $dato=$query->row();

                           ?>
                            
                          <tr>
                             <td><?php echo $n;?></td>
                             <td><?php echo $row['nombreT'];?></td>
                             <td><?php echo $row['ci'];?></td>
                             <td><?php echo $row['secretaria'];?></td>
                             
                            <?php $x=$dato->face;
                                 if($x ==0){?>
                                <TD BGCOLOR="red"><?php echo $x ?></TD>
                                <?php  }else if($x >=1&&$x <=24 ){ ?>
                                <TD BGCOLOR="orange"><?php echo $x ?></TD>        
                                <?php  }else if($x >=25&&$x <=49 ){ ?>
                                <TD BGCOLOR="yellow"><?php echo $x ?></TD>
                                <?php  }else if($x >=50&&$x <=74 ){ ?>
                                <TD BGCOLOR="#90ecf5"><?php echo $x ?></TD>
                                <?php  }else if($x >=75&&$x <=99 ){ ?>
                                <TD BGCOLOR="#a7f597"><?php echo $x ?></TD>
                                <?php  }else if($x >=100){ ?>
                                <TD BGCOLOR="green"><?php echo $x ?></TD>
                            <?php  }?>
                             
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 648c1d7ea54022fe192d16f47adc66111161339d
                            <?php $t=$dato->twitt;
                                 if($t ==0){?>
                                <TD BGCOLOR="red"><?php echo $t ?></TD>
                                <?php  }else if($t >=1&& $t <=24 ){ ?>
                                <TD BGCOLOR="orange"><?php echo $t ?></TD>        
                                <?php  }else if($t >=25&&$t <=49 ){ ?>
                                <TD BGCOLOR="yellow"><?php echo $t ?></TD>
                                <?php  }else if($t >=50&&$t <=74 ){ ?>
                                <TD BGCOLOR="#90ecf5"><?php echo $t ?></TD>
                                <?php  }else if($t >=75&&$t <=99 ){ ?>
                                <TD BGCOLOR="#a7f597"><?php echo $$t ?></TD>
                                <?php  }else if($t >=100){ ?>
                                <TD BGCOLOR="green"><?php echo $t ?></TD>
                            <?php  }?> 
                                 
                            <?php $to=$dato->sumaredes;
                                 if($to ==0){?>
                                <TD BGCOLOR="red"><?php echo $to ?></TD>
                                <?php  }else if($to >=1&& $to <=24 ){ ?>
                                <TD BGCOLOR="orange"><?php echo $to ?></TD>        
                                <?php  }else if($to >=25&&$to <=49 ){ ?>
                                <TD BGCOLOR="yellow"><?php echo $to ?></TD>
                                <?php  }else if($to >=50&&$to <=74 ){ ?>
                                <TD BGCOLOR="#90ecf5"><?php echo $to ?></TD>
                                <?php  }else if($to >=75&&$to <=99 ){ ?>
                                <TD BGCOLOR="#a7f597"><?php echo $to ?></TD>
                                <?php  }else if($to >=100){ ?>
                                <TD BGCOLOR="green"><?php echo $to ?></TD>
                            <?php  }?>     
                            <?php if (empty($facamigos->amigosfac)) {?>
                             <td>0</td>
                            <?php  } else{ ?>
                           
                             
                             <?php $a=$facamigos->amigosfac;
                                 if($a >=1&& $a <=249 ){?>
                                <TD BGCOLOR="red"><?php echo $a ?></TD>
                                <?php  }else if($a >=250&&$a <=499 ){ ?>
                                <TD BGCOLOR="yellow"><?php echo $a ?></TD>
                                <?php  }else if($a >=500&&$a <=749 ){ ?>
                                <TD BGCOLOR="#90ecf5"><?php echo $a ?></TD>
                                <?php  }else if($a >=750&&$a <=999 ){ ?>
                                <TD BGCOLOR="#a7f597"><?php echo $a ?></TD>
                                <?php  }else if($a >=1000){ ?>
                                <TD BGCOLOR="green"><?php echo $a ?></TD>
                            <?php  }?> 
                             
<<<<<<< HEAD
=======
=======
                             
                                                          
                             
                             <td><?php echo $dato->twitt?></td>
                             <td><?php echo $dato->sumaredes?></td>  
                             <?php if (empty($facamigos->amigosfac)) {?>
                             <td>0</td>
                             <?php  } else{ ?>
                                    <td><?php echo $facamigos->amigosfac?></td>
>>>>>>> 91d056aaa5981bac7f6e3705a03c9f893c2faec3
>>>>>>> 648c1d7ea54022fe192d16f47adc66111161339d
                             <?php  }?>
                             </tr> 
                          <?php } ?>
                        </tbody>
                       </table>
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
      var base_url='<?php echo base_url(); ?>';
    </script>
    <?php include'inc/footer.php'; ?>
    <?php include'inc/pie.php'; 
    