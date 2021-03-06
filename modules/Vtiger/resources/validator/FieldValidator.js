/*+***********************************************************************************
 * The contents of this file are subject to the vtiger CRM Public License Version 1.0
 * ("License"); You may not use this file except in compliance with the License
 * The Original Code is:  vtiger CRM Open Source
 * The Initial Developer of the Original Code is vtiger.
 * Portions created by vtiger are Copyright (C) vtiger.
 * All Rights Reserved.
 *************************************************************************************/
Vtiger_Base_Validator_Js("Vtiger_PACCeduleRUC_Validator_Js", {
    
       // Vtiger_Base_Validator_Js("Vtiger_PACCeduleruc_Validator_Js", {

        /**
         *Function which invokes field validation
         *@param accepts field element as parameter
         * @return error if validation fails true on success
         */
        invokeValidation: function(field, rules, i, options){
            var cedularucInstance = new Vtiger_PACCeduleRUC_Validator_Js();
                    cedularucInstance.setElement(field);
                    var response = cedularucInstance.validate();
                    if (response != true){
            return cedularucInstance.getError();
            }
            }
        }, {

        validate: function(){
           
                var fieldValue = this.getFieldValue();
                return this.validateValue(fieldValue);
        },

        validateValue : function(fieldValue){ 
            if (!fieldValue){
                var errorInfo = app.vtranslate('El campo no puede estar vacio');
                this.setError(errorInfo);
                return false;
            } else {
                if ($('input[name="pac_validate_cedule_ruc"]:checked').val() == "on") {
                    return true;
                } else {
                    if (isNaN(fieldValue)) { 
                        var errorInfo = app.vtranslate('Solo números');
                        this.setError(errorInfo);
                        return false;
                    } else {
                        if(fieldValue.length == 10){
                            if(this.validarCedula(fieldValue)) {
                                return true;
                            } else {
                                var errorInfo = app.vtranslate('Cédula no válida');
                                this.setError(errorInfo);
                                return false;
                            }    
                        } else {
                            if (fieldValue.length == 13){
                                if(this.validarRucPersonaNatural(fieldValue)) {
                                    return true;
                                } else {
                                    if(this.validarRucSociedadPrivada(fieldValue)) {
                                        return true;
                                    } else {
                                        if(this.validarRucSociedadPublica(fieldValue)) {
                                            return true;
                                        } else {
                                            var errorInfo = app.vtranslate('RUC no válido');
                                            this.setError(errorInfo);
                                            return false;
                                        }
                                    }
                                }
                            } else {
                                var errorInfo = app.vtranslate('La cantidad de dígitos no es correcta');
                                this.setError(errorInfo);
                                return false;
                            }
                        }
                    } 
                }
            }  
        },
    
    
        validarCedula: function (fieldValue){   
           if (!this.validarCodigoProvincia(fieldValue)) {
                return false;
            } else {      
                if (!this.validarTercerDigito(fieldValue, 'cedula')) {
                    return false;
                } else {
                    if (!this.algoritmoModulo10(fieldValue)) {
                        return false;
                    } else {
                        return true;
                    }
                }
            }
        },
    
        validarRucPersonaNatural: function(fieldValue) {
            if (!this.validarCodigoProvincia(fieldValue)) {
                return false;
            } else {
                if (!this.validarTercerDigito(fieldValue, 'rucNatural')) {
                    return false;
                } else {
                    if (!this.validarCodigoEstablecimiento(fieldValue.substring(10, 13))) {
                        return false;
                    } else {
                        if (!this.algoritmoModulo10(fieldValue)){
                            return false;
                        } else {
                            return true;
                        }             
                    }
                }
            }
        },

        validarRucSociedadPrivada: function(fieldValue) {  
            if (!this.validarCodigoProvincia(fieldValue)) {
                return false;
            } else {
                if (!this.validarTercerDigito(fieldValue, 'rucPrivada')) {
                    return false;
                } else {
                    if (!this.validarCodigoEstablecimiento(fieldValue.substring(10, 13))) {
                        return false;
                    } else {
                        if (!this.algoritmoModulo11(fieldValue.substring(0, 9), fieldValue.substring(9, 10),'rucPrivada')){
                            return false;
                        } else {
                            return true;
                        }             
                    }
                }
            }
        },

        validarRucSociedadPublica: function(fieldValue) { 
            if (!this.validarCodigoProvincia(fieldValue)) {
                return false;
            } else {          
                if (!this.validarTercerDigito(fieldValue, 'rucPublica')) {
                    return false;
                } else {
                    if (!this.validarCodigoEstablecimiento(fieldValue.substring(9, 13))) {
                        return false;
                    } else {
                        if (!this.algoritmoModulo11(fieldValue.substring(0, 8), fieldValue.substring(8, 9),'rucPublica')){
                            return false;
                        } else {
                            return true;
                        }             
                    }
                }
            }
        },

        validarCodigoProvincia: function(fieldValue) {
            var codProv = fieldValue.substring(0, 1);
                if (codProv < 0 || codProv > 24) {
                    return false;
            }
            return true;
        },

        validarTercerDigito: function(fieldValue, type) {
            var codProv = fieldValue.substring(2, 3);   
            switch(type) {
                case 'cedula':

                case 'rucNatural':
                    if (codProv < 0 || codProv > 5) {
                        return false;
                    }
                    break;
                case 'rucPrivada':
                    if (codProv != 9) {
                        return false;
                    }
                    break; 
                case 'rucPublica':
                    if (codProv != 6) {
                        return false;
                    }
                    break;
                default:
                    return false;
                    break;
            }
            return true;
        },

        validarCodigoEstablecimiento: function(numero) {
            numero = parseInt(numero);
            if (numero < 1) {
                return false;
            }
            return true;  
        },

        algoritmoModulo10: function(fieldValue) {       
            var digIni = fieldValue.substring(0, 9);
            var digVerif = fieldValue.substring(9, 10);
            var arrayCoeficientes = [2, 1, 2, 1, 2, 1, 2, 1, 2];
            digVerif = parseInt(digVerif);
            var total = 0;
            var valorPosicion;
            var residuo;
            var resultado;
            var sumValorPosicion = 0;            
           
            for(var i=0; i<digIni.length; i++) {
                digIni.charAt(i);         
                valorPosicion = (digIni[i] * arrayCoeficientes[i]);         
                if (valorPosicion >= 10) {
                    sumValorPosicion = (Math.floor(valorPosicion/10) + (valorPosicion % 10)); 
                    total = total + sumValorPosicion;
                } else {
                    total = total + valorPosicion;
                } 
            }

            residuo = total % 10;
            if (residuo == 0) {
                resultado = 0;
            } else {
                resultado = 10 - residuo;
            }   
            
            if (resultado != digVerif) {
                return false;
            }
            return true;
        },

        algoritmoModulo11: function(digIni, digVerif, type) {      
            var arrayCoeficientes;
            switch (type) {
                case 'rucPrivada':
                    arrayCoeficientes = [4, 3, 2, 7, 6, 5, 4, 3, 2];
                    break;
                case 'rucPublica':
                    arrayCoeficientes = [3, 2, 7, 6, 5, 4, 3, 2];
                    break;
                default:
                    return false;
                    break;
            }
            var valorPosicion = 0;
            var residuo = 0;
            var resultado;
            var total = 0;           
            for(var i = 0; i < digIni.length; i++) {
                digIni.charAt(i);         
                valorPosicion = (digIni[i] * arrayCoeficientes[i]);              
                total = total + valorPosicion;
            }
            residuo = total % 11;
            if (residuo == 0) {
                resultado = 0;
            } else {
                resultado = 11 - residuo;
            }
            if (resultado != digVerif) {
                return false;
            }
            
            return true;
        }
        
});




Vtiger_Base_Validator_Js("Vtiger_Email_Validator_Js",{

	/**
	 *Function which invokes field validation
	 *@param accepts field element as parameter
	 * @return error if validation fails true on success
	 */
	invokeValidation: function(field, rules, i, options){
		var emailInstance = new Vtiger_Email_Validator_Js();
		emailInstance.setElement(field);
		var response = emailInstance.validate();
		if(response != true){
			return emailInstance.getError();
		}
	}
},{

	/**
	 * Function to validate the email field data
	 */
	validate: function(){
		var fieldValue = this.getFieldValue();
		return this.validateValue(fieldValue);
	},
	/**
	 * Function to validate the email field data
	 * @return true if validation is successfull
	 * @return false if validation error occurs
	 */
	validateValue : function(fieldValue){
		var emailFilter = /^[_/a-zA-Z0-9]+([!"#$%&'()*+,./:;<=>?\^_`{|}~-]?[a-zA-Z0-9/_/-])*@[a-zA-Z0-9]+([\_\-\.]?[a-zA-Z0-9]+)*\.([\-\_]?[a-zA-Z0-9])+(\.?[a-zA-Z0-9]+)?$/;
		var illegalChars= /[\(\)\<\>\,\;\:\\\"\[\]]/ ;

		if (!emailFilter.test(fieldValue)) {
			var errorInfo = app.vtranslate('JS_PLEASE_ENTER_VALID_EMAIL_ADDRESS');
			this.setError(errorInfo);
			return false;

		} else if (fieldValue.match(illegalChars)) {
			var errorInfo = app.vtranslate('JS_CONTAINS_ILLEGAL_CHARACTERS');
			this.setError(errorInfo);
			return false;
		}
        return true;
	}
});

Vtiger_Base_Validator_Js("Vtiger_PositiveNumber_Validator_Js",{

	/**
	 *Function which invokes field validation
	 *@param accepts field element as parameter
	 * @return error if validation fails true on success
	 */
	invokeValidation: function(field, rules, i, options){
		var positiveNumberInstance = new Vtiger_PositiveNumber_Validator_Js();
		positiveNumberInstance.setElement(field);
		var response = positiveNumberInstance.validate();
		if(response != true){
			return positiveNumberInstance.getError();
		}
	}

},{

	/**
	 * Function to validate the Positive Numbers
	 * @return true if validation is successfull
	 * @return false if validation error occurs
	 */
	validate: function(){
		var fieldValue = this.getFieldValue();
		var negativeRegex= /(^[-]+\d+)$/ ;
		if(isNaN(fieldValue) || fieldValue < 0 || fieldValue.match(negativeRegex)){
			var errorInfo = app.vtranslate('JS_ACCEPT_POSITIVE_NUMBER');
			this.setError(errorInfo);
			return false;
		}
		return true;
	}
})

Vtiger_Base_Validator_Js("Vtiger_Integer_Validator_Js",{

	/**
	 *Function which invokes field validation
	 *@param accepts field element as parameter
	 * @return error if validation fails true on success
	 */
	invokeValidation: function(field, rules, i, options){
		var integerInstance = new Vtiger_Integer_Validator_Js();
		integerInstance.setElement(field);
		var response = integerInstance.validate();
		if(response != true){
			return integerInstance.getError();
		}
	}
},{

	/**
	 * Function to validate the Integre field data
	 * @return true if validation is successfull
	 * @return false if validation error occurs
	 */
	validate: function(){
		var fieldValue = this.getFieldValue();
		var integerRegex= /(^[-+]?\d+)$/ ;
		var decimalIntegerRegex = /(^[-+]?\d?).\d+$/ ;
		if ((!fieldValue.match(integerRegex))) {
			if(!fieldValue.match(decimalIntegerRegex)){
				var errorInfo = app.vtranslate("JS_PLEASE_ENTER_INTEGER_VALUE");
				this.setError(errorInfo);
				return false;
			} else {
				return true;
			}
		} else{
			return true;
		}
	}
})

Vtiger_PositiveNumber_Validator_Js("Vtiger_Percentage_Validator_Js",{

	/**
	 *Function which invokes field validation
	 *@param accepts field element as parameter
	 * @return error if validation fails true on success
	 */
	invokeValidation: function(field, rules, i, options){
		var percentageInstance = new Vtiger_Percentage_Validator_Js();
		percentageInstance.setElement(field);
		var response = percentageInstance.validate();
		if(response != true){
			return percentageInstance.getError();
		}
	}

},{

	/**
	 * Function to validate the percentage field data
	 * @return true if validation is successfull
	 * @return false if validation error occurs
	 */
	validate: function(){
		var response = this._super();
		if(response != true){
			return response;
		}else{
			var fieldValue = this.getFieldValue();
			if (fieldValue > 100) {
				var errorInfo = app.vtranslate('JS_PERCENTAGE_VALUE_SHOULD_BE_LESS_THAN_100');
				this.setError(errorInfo);
				return false;
			}
			return true;
		}
	}
});

Vtiger_Base_Validator_Js('Vtiger_Url_Validator_Js',{},{

	/**
	 * Function to validate the Url
	 * @return true if validation is successfull
	 * @return false if validation error occurs
	 */
	validate: function(){
		var fieldValue = this.getFieldValue();
		var regexp = /(\w+:{0,1}\w*@)?(\S+)(:[0-9]+)?(\/|\/([\w#!:.?+=&%@!\-\/]))?/;
		var result = regexp.test(fieldValue);
		if (!result ) {
			var errorInfo = app.vtranslate('JS_CONTAINS_ILLEGAL_CHARACTERS');//"Please enter valid url";
			this.setError(errorInfo);
			return false;
		}
		return true;
	}
})

Vtiger_Base_Validator_Js("Vtiger_MultiSelect_Validator_Js",{

	invokeValidation : function(field, rules, i, options) {
		var validatorInstance = new Vtiger_MultiSelect_Validator_Js ();
		validatorInstance.setElement(field);
		var result = validatorInstance.validate();
		if(result == true){
			return result;
		} else {
			return validatorInstance.getError();
		}
	}
},{
	/**
	 * Function to validate the Multi select
	 * @return true if validation is successfull
	 * @return false if validation error occurs
	 */
	validate: function(){
		var fieldInstance = this.getElement();
		var selectElementValue = fieldInstance.val();
		if(selectElementValue == null){
			var errorInfo = app.vtranslate('JS_PLEASE_SELECT_ATLEAST_ONE_OPTION');
			this.setError(errorInfo);
			return false;
		}
		return true;
	}

})


Vtiger_Email_Validator_Js ("Vtiger_MultiEmails_Validator_Js",{
	invokeValidation : function(field) {
		var validatorInstance = new Vtiger_MultiEmails_Validator_Js ();
		validatorInstance.setElement(field);
		var result = validatorInstance.validate();
		if(!result){
			return validatorInstance.getError();
		}
	}
},{
	/**
	 * Function to validate the Multi select
	 * @return true if validation is successfull
	 * @return false if validation error occurs
	 */
	validate: function(){
		var fieldInstance = this.getElement();
		var fieldInstanceValue = fieldInstance.val();
		if(fieldInstanceValue != ''){
			var emailsArr = fieldInstanceValue.split(',');
			var i;
			for (i = 0; i < emailsArr.length; ++i) {
				var result =  this.validateValue(emailsArr[i]);
				if(result == false){
					return result;
				}
			}
			return true;
		}
	}

});

Vtiger_PositiveNumber_Validator_Js("Vtiger_GreaterThanZero_Validator_Js",{

	/**
	 *Function which invokes field validation
	 *@param accepts field element as parameter
	 * @return error if validation fails true on success
	 */
	invokeValidation: function(field, rules, i, options){

		var GreaterThanZeroInstance = new Vtiger_GreaterThanZero_Validator_Js();
		GreaterThanZeroInstance.setElement(field);
		var response = GreaterThanZeroInstance.validate();
		if(response != true){
			return GreaterThanZeroInstance.getError();
		}
	}

},{

	/**
	 * Function to validate the Positive Numbers and greater than zero value
	 * @return true if validation is successfull
	 * @return false if validation error occurs
	 */
	validate: function(){

		var response = this._super();
		if(response != true){
			return response;
		}else{
			var fieldValue = this.getFieldValue();
			if(fieldValue == 0){
				var errorInfo = app.vtranslate('JS_VALUE_SHOULD_BE_GREATER_THAN_ZERO');
				this.setError(errorInfo);
				return false;
			}
		}
		return true;
	}
})

Vtiger_PositiveNumber_Validator_Js("Vtiger_WholeNumber_Validator_Js",{

    /**
	 *Function which invokes field validation
	 *@param accepts field element as parameter
	 * @return error if validation fails true on success
	 */
	invokeValidation: function(field, rules, i, options){
		var instance = new Vtiger_WholeNumber_Validator_Js();
		instance.setElement(field);
		var response = instance.validate();
		if(response != true){
			return instance.getError();
		}
	}
},{

	/**
	 * Function to validate the Positive Numbers and whole Number
	 * @return true if validation is successfull
	 * @return false if validation error occurs
	 */
	validate: function(){
		var response = this._super();
		if(response != true){
			return response;
		}
		var field = this.getElement();
		var fieldValue = this.getFieldValue();
		var fieldData = field.data();
		var fieldInfo = fieldData.fieldinfo;
		if((fieldValue % 1) != 0){
			if(! jQuery.isEmptyObject(fieldInfo)){
				var errorInfo = app.vtranslate('INVALID_NUMBER_OF')+" "+fieldInfo.label;
			} else {
				var errorInfo = app.vtranslate('INVALID_NUMBER');
			}
			this.setError(errorInfo);
			return false;
		}
		return true;
	}
})

Vtiger_Base_Validator_Js("Vtiger_lessThanToday_Validator_Js",{},{

	/**
	 * Function to validate the birthday field
	 * @return true if validation is successfull
	 * @return false if validation error occurs
	 */
	validate: function(){
		var field = this.getElement();
		var fieldData = field.data();
		var fieldDateFormat = fieldData.dateFormat;
		var fieldInfo = fieldData.fieldinfo;
		var fieldValue = this.getFieldValue();
		try{
			var fieldDateInstance = Vtiger_Helper_Js.getDateInstance(fieldValue,fieldDateFormat);
		}
		catch(err){
			this.setError(err);
			return false;
		}
		fieldDateInstance.setHours(0,0,0,0);
		var todayDateInstance = new Date();
		todayDateInstance.setHours(0,0,0,0);
		var comparedDateVal =  todayDateInstance - fieldDateInstance;
		if(comparedDateVal <= 0){
			var errorInfo = fieldInfo.label+" "+app.vtranslate('JS_SHOULD_BE_LESS_THAN_CURRENT_DATE');
			this.setError(errorInfo);
			return false;
		}
        return true;
	}
})

Vtiger_Base_Validator_Js("Vtiger_greaterThanDependentField_Validator_Js",{},{

	/**
	 * Function to validate the birthday field
	 * @return true if validation is successfull
	 * @return false if validation error occurs
	 */
	validate: function(dependentFieldList){
		var field = this.getElement();
		var fieldLabel = field.data('fieldinfo').label;
		var contextFormElem = field.closest('form');
		for(var i=0; i<dependentFieldList.length; i++){
			var dependentField = dependentFieldList[i];
			var dependentFieldInContext = jQuery('input[name='+dependentField+']',contextFormElem);
			if(dependentFieldInContext.length > 0){
				var dependentFieldLabel = dependentFieldInContext.data('fieldinfo').label;
				var fieldDateInstance = this.getDateTimeInstance(field);
				var dependentFieldDateInstance = this.getDateTimeInstance(dependentFieldInContext);
				var comparedDateVal =  fieldDateInstance - dependentFieldDateInstance;
				if(comparedDateVal < 0){
					var errorInfo = fieldLabel+' '+app.vtranslate('JS_SHOULD_BE_GREATER_THAN_OR_EQUAL_TO')+' '+dependentFieldLabel+'';
					this.setError(errorInfo);
					return false;
				}
			}
		}
        return true;
	},

	getDateTimeInstance : function(field) {
		var dateFormat = field.data('dateFormat');
		var fieldValue = field.val();
		try{
			var dateTimeInstance = Vtiger_Helper_Js.getDateInstance(fieldValue,dateFormat);
		}
		catch(err){
			this.setError(err);
			return false;
		}
		return dateTimeInstance;
	}
})

Vtiger_Base_Validator_Js("Vtiger_futureEventCannotBeHeld_Validator_Js",{},{

	/**
	 * Function to validate event status , which cannot be held for future events
	 * @return true if validation is successfull
	 * @return false if validation error occurs
	 */
	validate: function(dependentFieldList){
		var field = this.getElement();
		var fieldLabel = field.data('fieldinfo').label;
                var status = field.val();
		var contextFormElem = field.closest('form');
		for(var i=0; i<dependentFieldList.length; i++){
			var dependentField = dependentFieldList[i];
			var dependentFieldInContext = jQuery('input[name='+dependentField+']',contextFormElem);
			if(dependentFieldInContext.length > 0){
				var dependentFieldLabel = dependentFieldInContext.data('fieldinfo').label;
				var todayDateInstance = new Date();
                                var dateFormat = dependentFieldInContext.data('dateFormat');
                                var time = jQuery('input[name=time_start]',contextFormElem);
                                var fieldValue = dependentFieldInContext.val()+" "+time.val();
				var dependentFieldDateInstance = Vtiger_Helper_Js.getDateInstance(fieldValue,dateFormat);
				var comparedDateVal =  todayDateInstance - dependentFieldDateInstance;
				if(comparedDateVal < 0 && status == "Held"){
					var errorInfo = fieldLabel+' '+app.vtranslate('JS_FUTURE_EVENT_CANNOT_BE_HELD')+' '+dependentFieldLabel+'';
					this.setError(errorInfo);
					return false;
				}
			}
		}
        return true;
	}
})

Vtiger_Base_Validator_Js("Vtiger_lessThanDependentField_Validator_Js",{},{

	/**
	 * Function to validate the birthday field
	 * @return true if validation is successfull
	 * @return false if validation error occurs
	 */
	validate: function(dependentFieldList){
		var field = this.getElement();
		var fieldLabel = field.data('fieldinfo').label;
		var contextFormElem = field.closest('form');
		//No need to validate if value is empty
        if(field.val().length == 0) {
            return;
        }
		for(var i=0; i<dependentFieldList.length; i++){
			var dependentField = dependentFieldList[i];
			var dependentFieldInContext = jQuery('input[name='+dependentField+']',contextFormElem);
			if(dependentFieldInContext.length > 0){
				var dependentFieldLabel = dependentFieldInContext.data('fieldinfo').label;
				var fieldDateInstance = this.getDateTimeInstance(field);
				//No need to validate if value is empty
				if(dependentFieldInContext.val().length == 0) {
					continue;
				}
				var dependentFieldDateInstance = this.getDateTimeInstance(dependentFieldInContext);
				var comparedDateVal =  fieldDateInstance - dependentFieldDateInstance;
				if(comparedDateVal > 0){
					var errorInfo = fieldLabel+' '+app.vtranslate('JS_SHOULD_BE_LESS_THAN_OR_EQUAL_TO')+' '+dependentFieldLabel+'';
					this.setError(errorInfo);
					return false;
				}
			}
		}
        return true;
	},

	getDateTimeInstance : function(field) {
		var dateFormat = field.data('dateFormat');
		var fieldValue = field.val();
		try{
			var dateTimeInstance = Vtiger_Helper_Js.getDateInstance(fieldValue,dateFormat);
		}
		catch(err){
			this.setError(err);
			return false;
		}
		return dateTimeInstance;
	}
})

Vtiger_Base_Validator_Js('Vtiger_Currency_Validator_Js',{

	/**
	 *Function which invokes field validation
	 *@param accepts field element as parameter
	 * @return error if validation fails true on success
	 */
	invokeValidation: function(field, rules, i, options){
		var currencyValidatorInstance = new Vtiger_Currency_Validator_Js();
		currencyValidatorInstance.setElement(field);
		var response = currencyValidatorInstance.validate();
		if(response != true){
			return currencyValidatorInstance.getError();
		}
	}
},{

	/**
	 * Function to validate the Currency Field
	 * @return true if validation is successfull
	 * @return false if validation error occurs
	 */
	validate: function(){
		var response = this._super();
		if(response != true){
			return response;
		}
		var field = this.getElement();
		var fieldValue = this.getFieldValue();
		var fieldData = field.data();

		if(fieldData.decimalSeperator == "'") fieldData.decimalSeperator = "''";
		var strippedValue = fieldValue.replace(fieldData.decimalSeperator, '');
		var errorInfo;

        var regex = new RegExp(fieldData.groupSeperator,'g');
        strippedValue = strippedValue.replace(regex, '');
		//Note: Need to review if we should allow only positive values in currencies
		/*if(strippedValue < 0){
			var errorInfo = app.vtranslate('JS_CONTAINS_ILLEGAL_CHARACTERS');//"currency value should be greater than or equal to zero";
			this.setError(errorInfo);
			return false;
		}*/
		if(isNaN(strippedValue)){
			errorInfo = app.vtranslate('JS_CONTAINS_ILLEGAL_CHARACTERS');
			this.setError(errorInfo);
			return false;
		}
		if(strippedValue < 0){
			errorInfo = app.vtranslate('JS_ACCEPT_POSITIVE_NUMBER');
			this.setError(errorInfo);
			return false;
		}
		return true;
	}
})

Vtiger_Base_Validator_Js("Vtiger_ReferenceField_Validator_Js",{},{

	/**
	 * Function to validate the Positive Numbers and whole Number
	 * @return true if validation is successfull
	 * @return false if validation error occurs
	 */
	validate: function(){
		var field = this.getElement();
		var parentElement = field.closest('.fieldValue');
		var referenceField = parentElement.find('.sourceField');
		var referenceFieldValue = referenceField.val();
		var fieldInfo = referenceField.data().fieldinfo;
		if(referenceFieldValue == ""){
			var errorInfo = app.vtranslate('JS_REQUIRED_FIELD');
			this.setError(errorInfo);
			return false;
		}
		return true;
	}
})

Vtiger_Integer_Validator_Js("Vtiger_Double_Validator_Js",{},{

	/**
	 * Function to validate the Decimal field data
	 * @return true if validation is successfull
	 * @return false if validation error occurs
	 */
	validate: function(){
		var response = this._super();
		if(response == false){
			var fieldValue = this.getFieldValue();
			var doubleRegex= /^\d+.\d+$/ ;
			if (!fieldValue.match(doubleRegex)) {
				var errorInfo = app.vtranslate("JS_PLEASE_ENTER_DECIMAL_VALUE");
				this.setError(errorInfo);
				return false;
			}
			return true;
		}
		return response;
	}
})

Vtiger_Base_Validator_Js("Vtiger_Date_Validator_Js",{

	/**
	 *Function which invokes field validation
	 *@param accepts field element as parameter
	 * @return error if validation fails true on success
	 */
	invokeValidation: function(field, rules, i, options){
		var dateValidatorInstance = new Vtiger_Date_Validator_Js();
		dateValidatorInstance.setElement(field);
		var response = dateValidatorInstance.validate();
		if(response != true){
			return dateValidatorInstance.getError();
		}
		return response;
	}

},{

	/**
	 * Function to validate the Positive Numbers and whole Number
	 * @return true if validation is successfull
	 * @return false if validation error occurs
	 */
	validate: function(){
		var field = this.getElement();
		var fieldData = field.data();
		var fieldDateFormat = fieldData.dateFormat;
		var fieldValue = this.getFieldValue();
		try{
			Vtiger_Helper_Js.getDateInstance(fieldValue,fieldDateFormat);
		}
		catch(err){
			var errorInfo = app.vtranslate("JS_PLEASE_ENTER_VALID_DATE");
			this.setError(errorInfo);
			return false;
		}
		return true;
	}


})

Vtiger_Base_Validator_Js("Vtiger_Time_Validator_Js",{

	/**
	 * Function which invokes field validation
	 * @param accepts field element as parameter
	 * @return error if validation fails true on success
	 */
	invokeValidation : function(field, rules, i, options) {
		var validatorInstance = new Vtiger_Time_Validator_Js();
		validatorInstance.setElement(field);
		var result = validatorInstance.validate();
		if(result == true){
			return result;
		} else {
			return validatorInstance.getError();
		}
	}

},{

	/**
	 * Function to validate the Time Fields
	 * @return true if validation is successfull
	 * @return false if validation error occurs
	 */
	validate: function(){
		var fieldValue = this.getFieldValue();
		var time = fieldValue.replace(fieldValue.match(/[AP]M/i),'');
		var timeValue = time.split(":");
		if(isNaN(timeValue[0]) && isNaN(timeValue[1])) {
			var errorInfo = app.vtranslate("JS_PLEASE_ENTER_VALID_TIME");
			this.setError(errorInfo);
			return false;
		}
		return true;
	}

})

//Calendar Specific validators
// We have placed it here since quick create will not load module specific validators

Vtiger_greaterThanDependentField_Validator_Js("Calendar_greaterThanDependentField_Validator_Js",{},{

	getDateTimeInstance : function(field) {
        var form = field.closest('form');
		if(field.attr('name') == 'date_start') {
			var timeField = form.find('[name="time_start"]');
            var timeFieldValue = timeField.val();
		}else if(field.attr('name') == 'due_date') {
			var timeField = form.find('[name="time_end"]');
            if(timeField.length > 0) {
                var timeFieldValue = timeField.val();
            }else{
                //Max value for the day
                timeFieldValue = '11:59 PM';
            }
		}

		var dateFieldValue = field.val()+" "+ timeFieldValue;
        var dateFormat = field.data('dateFormat');
        return Vtiger_Helper_Js.getDateInstance(dateFieldValue,dateFormat);
	}

});

Vtiger_Base_Validator_Js('Calendar_greaterThanToday_Validator_Js',{},{

	/**
	 * Function to validate the birthday field
	 * @return true if validation is successfull
	 * @return false if validation error occurs
	 */
	validate: function(){
		var field = this.getElement();
		var fieldData = field.data();
		var fieldDateFormat = fieldData.dateFormat;
		var fieldInfo = fieldData.fieldinfo;
		var fieldValue = this.getFieldValue();
		try{
			var fieldDateInstance = Vtiger_Helper_Js.getDateInstance(fieldValue,fieldDateFormat);
		}
		catch(err){
			this.setError(err);
			return false;
		}
		fieldDateInstance.setHours(0,0,0,0);
		var todayDateInstance = new Date();
		todayDateInstance.setHours(0,0,0,0);
		var comparedDateVal =  todayDateInstance - fieldDateInstance;
		if(comparedDateVal >= 0){
			var errorInfo = fieldInfo.label+" "+app.vtranslate('JS_SHOULD_BE_GREATER_THAN_CURRENT_DATE');
			this.setError(errorInfo);
			return false;
		}
        return true;
	}
})

Vtiger_Base_Validator_Js("Calendar_RepeatMonthDate_Validator_Js",{

	/**
	 *Function which invokes field validation
	 *@param accepts field element as parameter
	 * @return error if validation fails true on success
	 */
	invokeValidation: function(field, rules, i, options){
		var repeatMonthDateValidatorInstance = new Calendar_RepeatMonthDate_Validator_Js();
		repeatMonthDateValidatorInstance.setElement(field);
		var response = repeatMonthDateValidatorInstance.validate();
		if(response != true){
			return repeatMonthDateValidatorInstance.getError();
		}
	}

},{

	/**
	 * Function to validate the Positive Numbers and whole Number
	 * @return true if validation is successfull
	 * @return false if validation error occurs
	 */
	validate: function(){
		var fieldValue = this.getFieldValue();

		if((parseInt(parseFloat(fieldValue))) != fieldValue || fieldValue == '' || parseInt(fieldValue) > '31' || parseInt(fieldValue) <= 0) {
			var result = app.vtranslate('JS_NUMBER_SHOULD_BE_LESS_THAN_32');
			this.setError(result);
			return false;
		}
		return true;
	}
})

Vtiger_WholeNumber_Validator_Js("Vtiger_WholeNumberGreaterThanZero_Validator_Js",{

	/**
	 *Function which invokes field validation
	 *@param accepts field element as parameter
	 * @return error if validation fails true on success
	 */
	invokeValidation: function(field, rules, i, options){

		var WholeNumberGreaterThanZero = new Vtiger_WholeNumberGreaterThanZero_Validator_Js();
		WholeNumberGreaterThanZero.setElement(field);
		var response = WholeNumberGreaterThanZero.validate();
		if(response != true){
			return WholeNumberGreaterThanZero.getError();
		}
	}

},{

	/**
	 * Function to validate the Positive Numbers and greater than zero value
	 * @return true if validation is successfull
	 * @return false if validation error occurs
	 */
	validate: function(){

		var response = this._super();
		if(response != true){
			return response;
		}else{
			var fieldValue = this.getFieldValue();
			if(fieldValue == 0){
				var errorInfo = app.vtranslate('JS_VALUE_SHOULD_BE_GREATER_THAN_ZERO');
				this.setError(errorInfo);
				return false;
			}
		}
		return true;
	}
})
Vtiger_Base_Validator_Js("Vtiger_AlphaNumeric_Validator_Js",{

	/**
	 *Function which invokes field validation
	 *@param accepts field element as parameter
	 * @return error if validation fails true on success
	 */
	invokeValidation: function(field, rules, i, options){
		var alphaNumericInstance = new Vtiger_AlphaNumeric_Validator_Js();
		alphaNumericInstance.setElement(field);
		var response = alphaNumericInstance.validate();
		if(response != true){
			return alphaNumericInstance.getError();
		}
	}

},{

	/**
	 * Function to validate the Positive Numbers
	 * @return true if validation is successfull
	 * @return false if validation error occurs
	 */
	validate: function(){
		var field = this.getElement();
		var fieldValue = field.val();
		var alphaNumericRegex = /^[a-z0-9 _-]*$/i;
		if (!fieldValue.match(alphaNumericRegex)) {
			var errorInfo = app.vtranslate("JS_CONTAINS_ILLEGAL_CHARACTERS");
			this.setError(errorInfo);
			return false;
		}
        return true;
	}
})
