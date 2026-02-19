
AGENDUM_VTA_VERSION := 0.1.7
VTIGER_ADAPTER_TESTING := true

push:
	@git add .
	@git commit -am "Updated at $$(date)" || true
	@git push

release: test push
	@git add .
	@git commit -m "Update Agendum Vtiger Adapter to version ${AGENDUM_VTA_VERSION}" || echo "No changes to commit"
	@git tag -fa "v${AGENDUM_VTA_VERSION}" -m "${AGENDUM_VTA_VERSION}"
	@git push origin --tags -f

test:
	@VTIGER_ADAPTER_TESTING=true ./vendor/bin/pest
