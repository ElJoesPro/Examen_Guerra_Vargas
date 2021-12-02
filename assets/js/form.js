function opciones_mant(){
    var matenimientos=document.getElementById('tipos_mant');

    var m_aceite=document.createElement('input');
    m_aceite.type="checkbox";
    m_aceite.name="aceite";
    m_aceite.id="aceite";
    var lable_aceite=document.createElement('label');
    lable_aceite.for="aceite";
    lable_aceite.id="p_aceite";
    lable_aceite.textContent="Mantenimiento aceite";

    var m_llantas=document.createElement('input');
    m_llantas.type="checkbox";
    m_llantas.name="llantas";
    m_llantas.id="llantas";
    var lable_llantas=document.createElement('label');
    lable_llantas.for="llantas";
    lable_llantas.id="p_llantas";
    lable_llantas.textContent="Mantenimiento llantas";

    var m_frenos=document.createElement('input');
    m_frenos.type="checkbox";
    m_frenos.name="frenos";
    m_frenos.id="frenos";
    var lable_frenos=document.createElement('label');
    lable_frenos.for="frenos";
    lable_frenos.id="p_frenos";
    lable_frenos.textContent="Mantenimiento frenos";

    matenimientos.appendChild(m_aceite);
    matenimientos.appendChild(lable_aceite);
    matenimientos.appendChild(m_frenos);
    matenimientos.appendChild(lable_frenos);
    matenimientos.appendChild(m_llantas);
    matenimientos.appendChild(lable_llantas);
}
function quitar_mant(){
    var v_aceite=document.getElementById('aceite');
    v_aceite.remove();
    var p_aceite=document.getElementById('p_aceite');
    p_aceite.remove();

    var v_frenos=document.getElementById('frenos');
    v_frenos.remove();
    var p_frenos=document.getElementById('p_frenos');
    p_frenos.remove();

    var v_llantas=document.getElementById('llantas');
    v_llantas.remove();
    var p_llantas=document.getElementById('p_llantas');
    p_llantas.remove();
}