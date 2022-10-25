        <?php
            //require "dbmysql.php";
            //$squery="select (select module_name from modules where modules.module_id=courses.module_id limit 1) as module_name,course_name,course_id,course_status from courses";
$squery="select * from ".$tbl;
            $ret=select($squery);
            ?>
                            <div class="row">
									<div class="col-xs-12">
                                        <!--<form class="form-horizontal" role="form" id="modle2">-->
										<table id="simple-table" class="table  table-bordered table-hover">
											<thead>
												<tr>
													<th class="center">
														<label class="pos-rel">
															<input type="checkbox" class="ace" />
															<span class="lbl"></span>
														</label>
													</th>
													<th class="detail-col">ID</th>
													<th>Instruction</th>
                                                    <th>Question</th>
                                                    <th>Option A</th>
													<th>Option B</th>
                                                    <th>Option C</th>
                                                    <th>Option D</th>
                                                    <th>Option E</th>
                                                    <th>Correct Option</th>
													<th></th>
												</tr>
											</thead>

											<tbody>
                                                <?php
                                                $i=0;
                                                while($row=mysqli_fetch_assoc($ret)){
                                                $question=(strpos($row['question'],'<img')!==false)?str_replace('quiz/','../',$row['question']):$row['question'];
                                                $optiona=(strpos($row['optiona'],'<img')!==false)?str_replace('quiz/','../',$row['optiona']):$row['optiona'];
                                                $optionb=(strpos($row['optionb'],'<img')!==false)?str_replace('quiz/','../',$row['optionb']):$row['optionb'];
                                                $optionc=(strpos($row['optionc'],'<img')!==false)?str_replace('quiz/','../',$row['optionc']):$row['optionc'];
                                                $optiond=(strpos($row['optiond'],'<img')!==false)?str_replace('quiz/','../',$row['optiond']):$row['optiond'];
                                                $optione=(strpos($row['optione'],'<img')!==false)?str_replace('quiz/','../',$row['optione']):$row['optione'];
                                                    ?>
												<tr>
													<td class="center">
														<label class="pos-rel">
															<input type="checkbox" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>

													<td class="center">
														<div class="action-buttons">
															
																<?php echo $row['qid'];?>
												
														</div>
													</td>
                                                        
													<td>
														<?php echo $row['q_instruction'];?>
													</td>
                                                    <td><?php echo $question;?></td>
													<td><?php echo $optiona;?></td>
												    <td><?php echo $optionb;?></td>
                                                    <td><?php echo $optionc;?></td>
                                                    <td><?php echo $optiond;?></td>
                                                    <td><?php echo $optione;?></td>
                                                    <td><?php echo $row['q_answer'];?></td>

													<td>
														<div class="hidden-sm hidden-xs btn-group">
															<!--<button class="btn btn-xs btn-success">
																<i class="ace-icon fa fa-check bigger-120"></i>
															</button>-->

															<!--<button class="btn btn-xs btn-info" data-toggle="modal" data-target="#myModal">
																<i class="ace-icon fa fa-pencil bigger-120"></i>
															</button>-->
                                                            <button class="btn btn-xs btn-info" onclick="showAjax('modlex','config_files/question_setup.php?id=<?php echo $row['qid'];?>&frm=edit&tbl=<?php echo $tbl;?>&mdname='+document.getElementById('modulename').value+'&subjname='+getElementById('subjectname').value,'pagecontent');">
																<i class="ace-icon fa fa-pencil bigger-120"></i>
															</button>

															<button class="btn btn-xs btn-danger" onclick="showAjax('','config_files/delete_question.php?id=<?php echo $row['qid'];?>&tbl=<?php echo $tbl;?>','myModal2');$('#myModal2').modal('show');">
																<i class="ace-icon fa fa-trash-o bigger-120"></i>
															</button>

															<!--<button class="btn btn-xs btn-warning">
																<i class="ace-icon fa fa-flag bigger-120"></i>
															</button>-->
														</div>

														<div class="hidden-md hidden-lg">
															<div class="inline pos-rel">
																<button class="btn btn-minier btn-primary dropdown-toggle" data-toggle="dropdown" data-position="auto">
																	<i class="ace-icon fa fa-cog icon-only bigger-110"></i>
																</button>

																<ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
																	<li>
																		<a href="#" class="tooltip-info" data-rel="tooltip" title="View">
																			<span class="blue">
																				<i class="ace-icon fa fa-search-plus bigger-120"></i>
																			</span>
																		</a>
																	</li>

																	<li>
																		<a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
																			<span class="green">
																				<i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
																			</span>
																		</a>
																	</li>

																	<li>
																		<a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
																			<span class="red">
																				<i class="ace-icon fa fa-trash-o bigger-120"></i>
																			</span>
																		</a>
																	</li>
																</ul>
															</div>
														</div>

                                                        <div class="modal fade" id="myModal" role="dialog">
                                                        </div>
                                                        <div id="myModal2" role="dialog" class="modal fade">
                                                        </div>
													</td>
												</tr>
    
                                                <?php
                                                }
                                                ?>
                                            </tbody>
                                        </table>
                                       <!-- </form> -->
                                </div>
                            </div>