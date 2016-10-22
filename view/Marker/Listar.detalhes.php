<?php
				echo "list = document.createElement('div');";
				echo "list.setAttribute('class', 'list');";
				
				// Título e descricao
				echo "detail = document.createElement('div');";
				echo "detail.setAttribute('class', 'detail');";
				echo "title = document.createElement('a');";
				echo "title.setAttribute('class', 'title');";
				echo "title.setAttribute('href', 'index.php?c=Marker&p=listarDetalhes&idmarker=$marker->id');";
				echo "title.setAttribute('target', '_blank');";
				
				echo "t = document.createTextNode('$marker->nome');";
				echo "title.appendChild(t);";
				
				
				echo "descricao = document.createElement('p');";
				echo "descricao.setAttribute('class', 'descricao');";
				
				
				echo "t = document.createTextNode('$marker->descricao');";
				echo "descricao.appendChild(t);";
				
				echo "detail.appendChild(title);";
				echo "detail.appendChild(descricao);";
				
				echo "icon = document.createElement('div');";
				echo "createArrow = document.createElement('img');";
				echo "createArrow.setAttribute('src', 'images/rightarrow.png');";
				echo "createArrow.setAttribute('class', 'arrow');";
				echo "icon.appendChild(createArrow);";
				echo "list.appendChild(icon);";
				
				

				echo "list.appendChild(detail);";
				echo "list.appendChild(icon);";
				
				foreach ($imagens as $imagem) {
					if ($imagem->idMarker == $marker->id) {
							// Imagem
							echo "photo = document.createElement('div');";
							echo "createImg = document.createElement('img');";
							echo "createImg.setAttribute('src', '$imagem->local');";
							echo "createImg.setAttribute('class', 'imagem');";
							echo "photo.appendChild(createImg);";
							echo "list.appendChild(photo);";
					}
				}
				
				
				
				echo "document.getElementById('detalhes').appendChild(list);";
?>