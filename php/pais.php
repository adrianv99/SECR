<script>
(function(){
        function ac_add_to_head(el){
            var head = document.getElementsByTagName('head')[0];
            head.insertBefore(el,head.firstChild);
        }
        function ac_add_link(url){
            var el = document.createElement('link');
            el.rel='stylesheet';el.type='text/css';el.media='all';el.href=url;
            ac_add_to_head(el);
        }
        function ac_add_style(css){
            var ac_style = document.createElement('style');
            if (ac_style.styleSheet) ac_style.styleSheet.cssText = css;
            else ac_style.appendChild(document.createTextNode(css));
            ac_add_to_head(ac_style);
        }
        ac_add_link('https://cdn.anychart.com/releases/v8/css/anychart-ui.min.css');
        ac_add_style(document.getElementById("ac_style_countries-dominican-republic").innerHTML);
        ac_add_style(".anychart-embed-countries-dominican-republic{width:100%;height:100%;}");
        })();</script>
        <div id="cont">
        </div>
        <script>
        anychart.onDocumentReady(function() {
          // create map
          var map = anychart.map();
        
          // create data set
          var dataSet = anychart.data.set(
            [{"id":"DO.ST","value":<?php
                    $query=incidentes_x_provincias_x_id(1);
                    $row= $query->fetch_assoc();
                    echo($row["COUNT(incidente.id_incidente)"]);
                ?>},
                    {"id":"DO.SR","value":<?php
                    $query=incidentes_x_provincias_x_id(2);
                    $row= $query->fetch_assoc();
                    echo($row["COUNT(incidente.id_incidente)"]);
                ?>},
                    {"id":"DO.VA","value":<?php
                    $query=incidentes_x_provincias_x_id(3);
                    $row= $query->fetch_assoc();
                    echo($row["COUNT(incidente.id_incidente)"]);
                ?>},
                    {"id":"DO.JU","value":<?php
                    $query=incidentes_x_provincias_x_id(4);
                    $row= $query->fetch_assoc();
                    echo($row["COUNT(incidente.id_incidente)"]);
                ?>},
                    {"id":"DO.SD","value":<?php
                    $query=incidentes_x_provincias_x_id(5);
                    $row= $query->fetch_assoc();
                    echo($row["COUNT(incidente.id_incidente)"]);
                ?>},
                    {"id":"DO.SZ","value":<?php
                    $query=incidentes_x_provincias_x_id(6);
                    $row= $query->fetch_assoc();
                    echo($row["COUNT(incidente.id_incidente)"]);
                ?>},
                    {"id":"DO.PM","value":<?php
                    $query=incidentes_x_provincias_x_id(7);
                    $row= $query->fetch_assoc();
                    echo($row["COUNT(incidente.id_incidente)"]);
                ?>},
                    {"id":"DO.MC","value":<?php
                    $query=incidentes_x_provincias_x_id(8);
                    $row= $query->fetch_assoc();
                    echo($row["COUNT(incidente.id_incidente)"]);
                ?>},
                    {"id":"DO.PP","value":<?php
                    $query=incidentes_x_provincias_x_id(9);
                    $row= $query->fetch_assoc();
                    echo($row["COUNT(incidente.id_incidente)"]);
                ?>},
                    {"id":"DO.DA","value":<?php
                    $query=incidentes_x_provincias_x_id(10);
                    $row= $query->fetch_assoc();
                    echo($row["COUNT(incidente.id_incidente)"]);
                ?>},
                    {"id":"DO.ES","value":<?php
                    $query=incidentes_x_provincias_x_id(11);
                    $row= $query->fetch_assoc();
                    echo($row["COUNT(incidente.id_incidente)"]);
                ?>},
                    {"id":"DO.1857","value":<?php
                    $query=incidentes_x_provincias_x_id(12);
                    $row= $query->fetch_assoc();
                    echo($row["COUNT(incidente.id_incidente)"]);
                ?>},
                    {"id":"DO.BR","value":<?php
                    $query=incidentes_x_provincias_x_id(13);
                    $row= $query->fetch_assoc();
                    echo($row["COUNT(incidente.id_incidente)"]);
                ?>},
                    {"id":"DO.BH","value":<?php
                    $query=incidentes_x_provincias_x_id(14);
                    $row= $query->fetch_assoc();
                    echo($row["COUNT(incidente.id_incidente)"]);
                ?>},
                    {"id":"DO.IN","value":<?php
                    $query=incidentes_x_provincias_x_id(15);
                    $row= $query->fetch_assoc();
                    echo($row["COUNT(incidente.id_incidente)"]);
                ?>},
                    {"id":"DO.EP","value":<?php
                    $query=incidentes_x_provincias_x_id(16);
                    $row= $query->fetch_assoc();
                    echo($row["COUNT(incidente.id_incidente)"]);
                ?>},
                    {"id":"DO.PN","value":<?php
                    $query=incidentes_x_provincias_x_id(17);
                    $row= $query->fetch_assoc();
                    echo($row["COUNT(incidente.id_incidente)"]);
                ?>},
                    {"id":"DO.AZ","value":<?php
                    $query=incidentes_x_provincias_x_id(18);
                    $row= $query->fetch_assoc();
                    echo($row["COUNT(incidente.id_incidente)"]);
                ?>},
                    {"id":"DO.VE","value":<?php
                    $query=incidentes_x_provincias_x_id(19);
                    $row= $query->fetch_assoc();
                    echo($row["COUNT(incidente.id_incidente)"]);
                ?>},
                    {"id":"DO.MN","value":<?php
                    $query=incidentes_x_provincias_x_id(20);
                    $row= $query->fetch_assoc();
                    echo($row["COUNT(incidente.id_incidente)"]);
                ?>},
                    {"id":"DO.PV","value":<?php
                    $query=incidentes_x_provincias_x_id(21);
                    $row= $query->fetch_assoc();
                    echo($row["COUNT(incidente.id_incidente)"]);
                ?>},
                    {"id":"DO.JO","value":<?php
                    $query=incidentes_x_provincias_x_id(22);
                    $row= $query->fetch_assoc();
                    echo($row["COUNT(incidente.id_incidente)"]);
                ?>},
                    {"id":"DO.DU","value":<?php
                    $query=incidentes_x_provincias_x_id(23);
                    $row= $query->fetch_assoc();
                    echo($row["COUNT(incidente.id_incidente)"]);
                ?>},
                    {"id":"DO.HM","value":<?php
                    $query=incidentes_x_provincias_x_id(24);
                    $row= $query->fetch_assoc();
                    echo($row["COUNT(incidente.id_incidente)"]);
                ?>},
                    {"id":"DO.MP","value":<?php
                    $query=incidentes_x_provincias_x_id(25);
                    $row= $query->fetch_assoc();
                    echo($row["COUNT(incidente.id_incidente)"]);
                ?>},
                    {"id":"DO.MT","value":<?php
                    $query=incidentes_x_provincias_x_id(26);
                    $row= $query->fetch_assoc();
                    echo($row["COUNT(incidente.id_incidente)"]);
                ?>},
                    {"id":"DO.SM","value":<?php
                    $query=incidentes_x_provincias_x_id(27);
                    $row= $query->fetch_assoc();
                    echo($row["COUNT(incidente.id_incidente)"]);
                ?>},
                    {"id":"DO.CR","value":<?php
                    $query=incidentes_x_provincias_x_id(28);
                    $row= $query->fetch_assoc();
                    echo($row["COUNT(incidente.id_incidente)"]);
                ?>},
                    {"id":"DO.NC","value":<?php
                    $query=incidentes_x_provincias_x_id(29);
                    $row= $query->fetch_assoc();
                    echo($row["COUNT(incidente.id_incidente)"]);
                ?>},
                    {"id":"DO.SE","value":<?php
                    $query=incidentes_x_provincias_x_id(30);
                    $row= $query->fetch_assoc();
                    echo($row["COUNT(incidente.id_incidente)"]);
                ?>},
                    {"id":"DO.AL","value":<?php
                    $query=incidentes_x_provincias_x_id(31);
                    $row= $query->fetch_assoc();
                    echo($row["COUNT(incidente.id_incidente)"]);
                ?>},
                    {"id":"DO.RO","value":<?php
                    $query=incidentes_x_provincias_x_id(31);
                    $row= $query->fetch_assoc();
                    echo($row["COUNT(incidente.id_incidente)"]);
                ?>}]
          );
        
          // create choropleth series
          series = map.choropleth(dataSet);
        
          // set geoIdField to 'id', this field contains in geo data meta properties
          series.geoIdField('id');
        
          // set map color settings
          series.colorScale(anychart.scales.linearColor('#E0F0FC', '#3182bd'));
          series.hovered().fill('#ff4c52');
        
          // set geo data, you can find this map in our geo maps collection
          // https://cdn.anychart.com/#maps-collection
          map.geoData(anychart.maps['dominican_republic']);
        
          //set map container id (div)
          map.container('cont');
        
          //initiate map drawing
          map.draw();
        });



</script>