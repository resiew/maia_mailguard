<?php
    /*
     * $Id$
     *
     * MAIA MAILGUARD LICENSE v.1.0
     *
     * Copyright 2004 by Robert LeBlanc <rjl@renaissoft.com>
     * All rights reserved.
     *
     * PREAMBLE
     *
     * This License is designed for users of Maia Mailguard
     * ("the Software") who wish to support the Maia Mailguard project by
     * leaving "Maia Mailguard" branding information in the HTML output
     * of the pages generated by the Software, and providing links back
     * to the Maia Mailguard home page.  Users who wish to remove this
     * branding information should contact the copyright owner to obtain
     * a Rebranding License.
     *
     * DEFINITION OF TERMS
     *
     * The "Software" refers to Maia Mailguard, including all of the
     * associated PHP, Perl, and SQL scripts, documentation files, graphic
     * icons and logo images.
     *
     * GRANT OF LICENSE
     *
     * Redistribution and use in source and binary forms, with or without
     * modification, are permitted provided that the following conditions
     * are met:
     *
     * 1. Redistributions of source code must retain the above copyright
     *    notice, this list of conditions and the following disclaimer.
     *
     * 2. Redistributions in binary form must reproduce the above copyright
     *    notice, this list of conditions and the following disclaimer in the
     *    documentation and/or other materials provided with the distribution.
     *
     * 3. The end-user documentation included with the redistribution, if
     *    any, must include the following acknowledgment:
     *
     *    "This product includes software developed by Robert LeBlanc
     *    <rjl@renaissoft.com>."
     *
     *    Alternately, this acknowledgment may appear in the software itself,
     *    if and wherever such third-party acknowledgments normally appear.
     *
     * 4. At least one of the following branding conventions must be used:
     *
     *    a. The Maia Mailguard logo appears in the page-top banner of
     *       all HTML output pages in an unmodified form, and links
     *       directly to the Maia Mailguard home page; or
     *
     *    b. The "Powered by Maia Mailguard" graphic appears in the HTML
     *       output of all gateway pages that lead to this software,
     *       linking directly to the Maia Mailguard home page; or
     *
     *    c. A separate Rebranding License is obtained from the copyright
     *       owner, exempting the Licensee from 4(a) and 4(b), subject to
     *       the additional conditions laid out in that license document.
     *
     * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDER AND CONTRIBUTORS
     * "AS IS" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT
     * LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS
     * FOR A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE
     * COPYRIGHT OWNER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT,
     * INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING,
     * BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS
     * OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND
     * ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR
     * TORT (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE
     * USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
     *
     */

    // Page subtitle
    $lang['banner_subtitle'] =  "Configuração por omissão do Filtro de Email por Domínio";

    // Table headers
    $lang['header_domain'] =  "Domínio";
    $lang['header_admins'] =  "Administradores do Domínio";
    $lang['header_revoke'] =  "Revogar";
    $lang['header_admin_name'] =  "Administrador";
    $lang['header_add_administrator'] =  "Adicionar Administrador";

    // Text labels
    $lang['text_yes'] =  "Sim";
    $lang['text_no'] =  "Não";
    $lang['text_virus_scanning'] =  "Verificação de Vírus";
    $lang['text_enabled'] =  "Activa";
    $lang['text_disabled'] =  "Inactiva";
    $lang['text_quarantined'] =  "posto em Quarentena";
    $lang['text_discarded'] =  "Apagado";
    $lang['text_labeled'] =  "Etiquetado";
    $lang['text_detected_viruses'] =  "Virus detectados devem ser...";
    $lang['text_spam_filtering'] =  "Filtragem de Spam";
    $lang['text_detected_spam'] =  "Spam detectedo deve ser...";
    $lang['text_prefix_subject'] =  "Adicionar prefixo do assunto de spam";
    $lang['text_add_spam_header'] =  "Adicionar cabeçalhos X-Spam: quando a Pontuação é";
    $lang['text_consider_mail_spam'] =  "Considerar email spam quando a Pontuação é";
    $lang['text_quarantine_spam'] =  "Colocar Spam em quarentena quando a Pontuação é";
    $lang['text_kill_spam'] =  "Apagar Spam (sem quarentena) quando a pontuação é";
    $lang['text_attachment_filtering'] =  "Filtragem de tipos de Anexo";
    $lang['text_mail_with_attachments'] =  "Email com Anexos Perigosos deve ser...";
    $lang['text_bad_header_filtering'] =  "Filtragem de Erros de Cabeçalho";
    $lang['text_mail_with_bad_headers'] =  "Email com cabeçalhos inválidos deve ser...";
    $lang['text_settings_updated'] =  "As suas definições por omissão do filtro de email foram actualizadas.";
    $lang['text_system_default'] =  "Configuração por Omissão do Sistema";
    $lang['text_no_admins'] =  "Não foram seleccionados adminstradores para este domínio.";
    $lang['text_no_available_admins'] =  "Não existem utilizadores disponíveis para administrar este domínio.";
    $lang['text_administrators_added'] =  "O(s) novo(s) administrador(es) foram adicionado(s) ao domínio.";
    $lang['text_admins_revoked'] =  "Os privilégios dos administradores seleccionados foram revogados.";
    $lang['text_cache_ham_question'] =  "Deverão ser cacheados items não-spam?";
    $lang['text_enable_user_autocreation'] =  "Activar criação automática de utilizadores?";
    $lang['text_domain_theme'] = "Tema por omissão para este domínio?";

    // Buttons
    $lang['button_reset'] =  "Limpar";
    $lang['button_update_domain'] =  "Actualizar a Configuração por Omissão para este Domínio";
    $lang['button_revoke'] =  "Revogar Privilégios dos Administradores Seleccionados";
    $lang['button_grant'] =  "Atribuir Privilégios aos Administradores";

    // Links
    $lang['link_domain_settings'] =  "Voltar às Definições de Domínio";
    $lang['link_admin_domains'] =  "Voltar ao menu de Administração de Domínio";
?>
