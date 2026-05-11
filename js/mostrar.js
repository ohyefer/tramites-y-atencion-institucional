var teveo = null;
var teveodos = null;
var formus = [null, 'AD', 'OB', 'DO' ];
var formusdos = [null, 'IngAD', 'VacAD', 'LibAD', 'TrasAD', 'IngOB', 'VacOB', 'LibOB', 'TrasOB', 'IngDO', 'VacDO', 'LibDO', 'TrasDO'];

function muestra(formulario) { 
if (teveo != null) 
document.getElementById(teveo).style.display = 'none'; 
if (formus[formulario] != null) 
document.getElementById(formus[formulario]).style. display = 'block'; 
teveo = formus[formulario] 
} 
function muestra(formulario) { 
if (teveo != null) 
document.getElementById(teveo).style.display = 'none'; 
if (formus[formulario] != null) 
document.getElementById(formus[formulario]).style. display = 'block'; 
teveo = formus[formulario] 
} 
function muestrados(formulariodos) { 
if (teveodos != null) 
document.getElementById(teveodos).style.display = 'none'; 
if (formus[formulariodos] != null) 
document.getElementById(formusdos[formulariodos]). style. display = 'block'; 
teveodos = formusdos[formulariodos] 
} 