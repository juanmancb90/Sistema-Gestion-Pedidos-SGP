//creando el arreglo de datos que va a contener la
Ext.onReady(function(){
    var Datos = [
        ['Valle','Cali','Cable Union',2397],
        ['Valle','Cali','Telmex',2360],
        ['Antioquia','Medellin','Telmex',1600],
        ['Cundinamarca','Bogota','ETB',2500],
        ['Atlantico','Barranquilla','Telecaribe',140],
        ['Atlantico','Barranquilla','Telmex',2145],
        ['Antioquia','Medellin','UNE', 45],
        ['Cundinamarca','Bogota','Telmex',2200],
        ['Cundinamarca','Bogota','Telefonica',72],
        ['Risaralda','Pereira','Cable Union',34],
        ['Tolima','Ibague','Cable Union',340],
        ['Valle','Cali','Telefonica',47]];

//creando encabezados y definiendo tipo de datos
    var store = new Ext.data.ArrayStore({
    fields: [
    {name: 'Departamento', type: 'String'},
    {name: 'Municipio', type: 'String'},
    {name: 'Cable Operador', type: 'String'},
    {name: 'Nro. Suscriptores', type: 'Interger'},
    ]
    });
    store.loadData(Datos);

//Creando la tabla con extjs, crenado un objeto Ext.grid.GridPanel
    var grid = new Ext.grid.GridPanel({
    title:'Suscriptores por cable en colombia',
    store: store,
    renderTo: document.body,
    columns:
    [
    {id:'Departamento',header: "Departamento", width: 158, sortable: true, dataIndex: 'Departamento'},
    {header: "Municipio", width: 180, sortable: true, dataIndex: 'Municipio'},
    {header: "Cable Operador", width: 180, sortable: true, dataIndex: 'Cable Operador'},
    {header: "Nro Suscriptores", width: 180, sortable: true, dataIndex: 'Nro. Suscriptores'},
    ],
    stripeRows: true,
    height:400,
    width:720
    });
   grid.render('p');
});




//
//Ext.form.Field.prototype.msgTarget = 'side';
//
//    var bd = Ext.getBody();
//
//    var myData = [
//        ['Valle','Cali','Cable Union',2397],
//        ['Valle','Cali','Telmex',2360],
//        ['Antioquia','Medellin','Telmex',1600],
//        ['Cundinamarca','Bogota','ETB',2500],
//        ['Atlantico','Barranquilla','Telecaribe',140],
//        ['Atlantico','Barranquilla','Telmex',2145],
//        ['Antioquia','Medellin','UNE', 45],
//        ['Cundinamarca','Bogota','Telmex',2200],
//        ['Cundinamarca','Bogota','Telefonica',72],
//        ['Risaralda','Pereira','Cable Union',34],
//        ['Tolima','Ibague','Cable Union',340],
//        ['Valle','Cali','Telefonica',47]
//    ];
//
//    var ds = new Ext.data.Store({
//        reader: new Ext.data.ArrayReader({}, [
//               {name: 'departamento'},
//               {name: 'municipio'},
//	       {name: 'cable'},
//	       {name: 'brosuscriptores', type: 'Int'}
//
//          ])
//    });
//    ds.loadData(myData);
//
//    function italic(value){
//        return '<i>' + value + '</i>';
//    }
//
//    function change(val){
//        if(val > 0){
//            return '<span style="color:green;">' + val + '</span>';
//        }else if(val < 0){
//            return '<span style="color:red;">' + val + '</span>';
//        }
//        return val;
//    }
//
//    function pctChange(val){
//        if(val > 0){
//            return '<span style="color:green;">' + val + '%</span>';
//        }else if(val < 0){
//            return '<span style="color:red;">' + val + '%</span>';
//        }
//        return val;
//    }
//
//    var colModel = new Ext.grid.ColumnModel([
//        {id:'departamento', header: "Departamento", width: 180, sortable: true, locked:false, dataIndex: 'departamento'},
//        {id:'municipio', header: "Municipio", width: 180, sortable: true, locked:false, dataIndex: 'municipio'},
//	{id:'nombre', header: "Nombre del Prestador", width: 150, sortable: true, locked:false, dataIndex: 'nombre'},
//	{id:'numero', header: "Numero de Suscriptores", width: 180, sortable: true, locked:false, dataIndex: 'numero'}
//    ]);
//
//    var gridForm = new Ext.FormPanel({
//        id: 'formulario',
//	frame: true,
//        labelAlign: 'left',
//        title: '',
//        bodyStyle:'padding:5px',
//        autoWidth: true,
//        layout: 'column',
//        items: [{
//            columnWidth: 0.6,
//            layout: 'fit',
//            items: {
//	            xtype: 'grid',
//		    ds: ds,
//	            cm: colModel,
//	            sm: new Ext.grid.RowSelectionModel({
//	                singleSelect: true,
//	                listeners: {
//	                    rowselect: function(sm, row, rec) {
//	                        Ext.getCmp("formulario").getForm().loadRecord(rec);
//			}
//	              }
//	            }),
//	            autoExpandColumn: 'nombre',
//	            height: 300,
//		    title:'Suscriptores por Cable en Colombia',
//	            border: true,
//		        listeners: {
//		        	render: function(g) {
//		        		g.getSelectionModel().selectRow(0);
//		        	},
//		        	delay: 10
//		        }
//        	}
//        },{
//            columnWidth: 0.4,
//            xtype: 'fieldset',
//            labelWidth: 150,
//            title:'Detalles',
//            defaults: {width: 300},
//            defaultType: 'textfield',
//            autoHeight: true,
//            bodyStyle: Ext.isIE ? 'padding:0 0 5px 15px;' : 'padding:10px 15px;',
//            border: false,
//            style: {
//                "margin-left": "10px",
//                "margin-right": Ext.isIE6 ? (Ext.isStrict ? "-10px" : "-13px") : "0"
//            },
//            items: [{
//                fieldLabel: 'Departamento',
//                name: 'departamento',
//		width: 200
//            },{
//                fieldLabel: 'Municipio',
//                name: 'municipio',
//		width: 200
//            },{
//                fieldLabel: 'Nombre del Prestador',
//		width: 200,
//                name: 'cable'
//            },{
//                fieldLabel: 'Numero de Suscriptores',
//                name: 'nrosuscriptores',
//		width: 200
//            }]
//        },{
//        	columnWidth: 0.4,
//			height:230,
//			style:'padding:0 0 0 25px;',
//			html:'<div id="result"></div>'
//
//        }]
//        renderTo: bd
//
//    });
// gridForm.render('p');