<div class="theme-inner-banner">
				<div class="opacity">
					<div class="container">
						<h2><?php
                            if ($currentSection==aboutUs) {
                                echo "Haqqımızda";
                            }
                            elseif ($currentSection==news) {
                                echo "Xəbərlər";
                            }
                            elseif ($currentSection==photoGallery) {
                                echo "Fotoqalereya";
                            }
                            elseif ($currentSection==videoGallery) {
                                echo "Vİdeoqalereya";
                            }
                            elseif ($currentSection==contact) {
                                echo "Əlaqə";
                            }
                            elseif ($currentSection==achievements) {
                                echo "Naİlİyyətlərİmİz";
                            }
                            elseif ($currentSection==press) {
                                echo "KÜtləvİ İnformasİya Vasİtələrİ";
                            }
                            elseif ($currentSection==volunteers) {
                                echo "KÖnÜllÜlərİmİz";
                            }
                            elseif ($currentSection==doctors) {
                                echo "Həkİmlərİmİz";
                            }
                            else {
                                echo " ";
                            }
                        ?></h2>
						<ul>
                            <li><a href="index.php?section=home" class="tran3s">Ana səhifə</a></li>
							<li>/</li>
							<li><?php
                                if ($currentSection==aboutUs) {
                                    echo "Haqqımızda";
                                }
                                elseif ($currentSection==news) {
                                    echo "Xəbərlər";
                                }
                                elseif ($currentSection==photoGallery) {
                                    echo "Fotoqalereya";
                                }
                                elseif ($currentSection==videoGallery) {
                                    echo "Videoqalereya";
                                }
                                elseif ($currentSection==contact) {
                                    echo "Əlaqə";
                                }
                                elseif ($currentSection==achievements) {
                                    echo "Nailiyyətlərimiz";
                                }
                                elseif ($currentSection==press) {
                                    echo "KİV";
                                }
                                elseif ($currentSection==volunteers) {
                                    echo "Könüllülərimiz";
                                }
                                elseif ($currentSection==doctors) {
                                    echo "Həkimlərimiz";
                                }
                                else {
                                    echo " ";
                                }
                            ?></li>
						</ul>
					</div> <!-- /.container -->
				</div> <!-- /.opacity -->
			</div> <!-- /.theme-inner-banner -->