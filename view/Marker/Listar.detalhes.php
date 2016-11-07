<?php
				// Criaзгo da div 'list' (div que contйm os detalhes)
				echo "list = document.createElement('div');";
				echo "list.setAttribute('class', 'list');";
				
				
				// Criaзгo da div 'detail'
				echo "detail = document.createElement('div');";
				echo "detail.setAttribute('class', 'detail');";
				
				// Tнtulo
				echo "title = document.createElement('a');";
				echo "title.setAttribute('class', 'title');";
				echo "title.setAttribute('href', 'index.php?c=Marker&p=listarDetalhes&idmarker=$marker->id');";
				echo "title.setAttribute('target', '_blank');";		
				echo "t = document.createTextNode('$marker->nome');";
				echo "title.appendChild(t);";
				
				// Descriзгo
				echo "descricao = document.createElement('p');";
				echo "descricao.setAttribute('class', 'descricao');";
				echo "t = document.createTextNode('$marker->descricao');";
				echo "descricao.appendChild(t);";
				
				// Botгo "como chegar"
				echo "comochegar = document.createElement('div');";
				echo "comochegar.setAttribute('class', 'dir');";
				echo "icone = document.createElement('img');";
				echo "icone.setAttribute('src', 'images/directions.png');";
				echo "icone.setAttribute('class', 'direimg');";
				
				echo "text = document.createElement('a');";
				echo "text.setAttribute('href', 'https://maps.google.com?saddr=Current+Location&daddr=$marker->lat,$marker->longi');";
				echo "text.setAttribute('target', '_blank');";
				echo "t = document.createTextNode('  Como chegar');";
				echo "text.appendChild(t);";
				
				echo "comochegar.appendChild(icone);";
				echo "comochegar.appendChild(text);";
				
				
				
				// Adicionar tнtulo e descriзгo а div 'detail'
				
				echo "detail.appendChild(title);";
				echo "detail.appendChild(descricao);";
				echo "detail.appendChild(comochegar);";
				
				// Adicionar a div 'detail' na div 'list'
				echo "list.appendChild(detail);";
				
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